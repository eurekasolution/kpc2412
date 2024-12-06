<script>
    function setCommand(command)
    {
        var editor = document.querySelector("#editor");
        var html = document.querySelector("#html");

        document.execCommand(command);
        html.innerHTML = editor.innerHTML;
    }
</script>

<div class="row">
    <div class="col colLine">
        <button type="button" class="btn btn-primary btn-sm" onClick="setCommand('bold')">
            <span class="material-icons">format_bold</span>
        </button> 
        <button type="button" class="btn btn-primary btn-sm" onClick="setCommand('underline')">
            <span class="material-icons">format_underlined</span>
        </button> 
        <button type="button" class="btn btn-primary btn-sm" onClick="setCommand('italic')">
            <span class="material-icons">format_italic</span>
        </button> 
    </div>
</div>
<div class="row">
    <div class="col-2 colLine">제목</div>
    <div class="col colLine">
        <input type="text" class="form-control" placeholder="제목을 입력하세요">
    </div>
</div>
<div class="row">
    <div class="col colLine">
        <div id="editor" contenteditable="true" style="width:100%; height:300px; border:1px solid #888888; padding:5px;" class="rounded">동해물과 백두산이 마르고 닳도록 하나님이 보우하사 우리나라 만세
        </div>
    </div>
</div>

<div class="row" style="display:;"> <!-- style="display:none;" -->
    <div class="col colLine">
        <textarea id="html" class="form-control" name="html" rows="7"> </textarea>
    </div>
</div>
<div class="row">
    <div class="col colLine text-center">
        <button type="submit" class="btn btn-primary">
            <span class="material-icons">edit</span> 글쓰기</button>
    </div>
</div>