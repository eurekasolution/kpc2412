<style>
        .link {
            stroke-width: 3px;
            cursor: pointer;
        }
        .node text {
            font-size: 14px;
            font-family: Arial, sans-serif;
            text-anchor: middle;
            fill: #000;
        }
        .tooltip {
            position: absolute;
            padding: 5px;
            background: rgba(0, 0, 0, 0.8);
            color: #fff;
            border-radius: 4px;
            pointer-events: none;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <svg width="800" height="600"></svg>
    <div id="tooltip" class="tooltip" style="display: none;"></div>

    <script>
        // JSON 데이터
        const data = {
            "nodes": [
                { "name": "홍대감" },
                { "name": "홍길동" },
                { "name": "이이" },
                { "name": "사임당" },
                { "name": "정약용" },
                { "name": "정약전" }
            ],
            "links": [
                { "source": "홍대감", "target": "홍길동", "relation": "부자" },
                { "source": "홍길동", "target": "이이", "relation": "친구" },
                { "source": "이이", "target": "사임당", "relation": "모자" },
                { "source": "정약용", "target": "정약전", "relation": "형제" },
                { "source": "정약용", "target": "홍길동", "relation": "친구" }
            ]
        };

        // SVG 설정
        const width = 800, height = 600;
        const svg = d3.select("svg")
                      .attr("width", width)
                      .attr("height", height);

        // 줌 및 드래그 설정
        const zoom = d3.zoom()
            .scaleExtent([0.5, 2]) // 최소 50%, 최대 200%
            .on("zoom", (event) => {
                g.attr("transform", event.transform); // 줌과 이동 적용
            });

        svg.call(zoom);

        // 메인 그룹 생성 (줌 및 이동 적용 대상)
        const g = svg.append("g");

        // 관계별 색상
        const relationColor = {
            "부자": "#FF0000",
            "친구": "#00FF00",
            "모자": "#FFFF00",
            "형제": "#888888"
        };

        // Force Simulation
        const simulation = d3.forceSimulation(data.nodes)
            .force("link", d3.forceLink(data.links).id(d => d.name).distance(100))
            .force("charge", d3.forceManyBody().strength(-300))
            .force("center", d3.forceCenter(width / 2, height / 2));

        // 링크 추가
        const link = g.append("g")
            .selectAll("line")
            .data(data.links)
            .join("line")
            .attr("class", "link")
            .attr("stroke", d => relationColor[d.relation])
            .on("mouseover", (event, d) => {
                const tooltip = d3.select("#tooltip");
                tooltip.style("display", "block")
                       .style("left", (event.pageX + 10) + "px")
                       .style("top", (event.pageY - 10) + "px")
                       .text(`${d.source.name} - ${d.target.name} : ${d.relation}`);
            })
            .on("mouseout", () => {
                d3.select("#tooltip").style("display", "none");
            });

        // 노드 추가
        const node = g.append("g")
            .selectAll("circle")
            .data(data.nodes)
            .join("g")
            .attr("class", "node")
            .call(d3.drag()
                .on("start", (event, d) => {
                    if (!event.active) simulation.alphaTarget(0.3).restart();
                    d.fx = d.x;
                    d.fy = d.y;
                })
                .on("drag", (event, d) => {
                    d.fx = event.x;
                    d.fy = event.y;
                })
                .on("end", (event, d) => {
                    if (!event.active) simulation.alphaTarget(0);
                    d.fx = null;
                    d.fy = null;
                })
            );

        // 노드 원
        node.append("circle")
            .attr("r", 20)
            .attr("fill", "#ffffff")
            .attr("stroke", "#000000")
            .attr("stroke-width", 2);

        // 노드 텍스트
        node.append("text")
            .text(d => d.name);

        // 시뮬레이션 업데이트
        simulation.on("tick", () => {
            // 링크 위치 업데이트
            link.attr("x1", d => d.source.x)
                .attr("y1", d => d.source.y)
                .attr("x2", d => d.target.x)
                .attr("y2", d => d.target.y);

            // 노드 위치 업데이트
            node.attr("transform", d => `translate(${d.x},${d.y})`);
        });
    </script>
