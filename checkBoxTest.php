<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script src="js\jquery-3.2.1.min.js"></script>
</head>
<body>
    <input type="checkbox" name="select-all" id="select-all" onclick="toggle(this)" /> Toggle All<br/>

    <input type="checkbox" name="foo" value="bar1"> Bar 1<br/>
    <input type="checkbox" name="foo" value="bar2"> Bar 2<br/>
    <input type="checkbox" name="foo" value="bar3"> Bar 3<br/>
    <input type="checkbox" name="foo" value="bar4"> Bar 4<br/>
    <script language="JavaScript">
        // Listen for click on toggle checkbox
        // $('#select-all').click(function(event) {   
        //     if(this.checked) {
        //         // Iterate each checkbox
        //         $(':checkbox').each(function() {
        //             this.checked = true;                        
        //         });
        //     } else {
        //         $(':checkbox').each(function() {
        //             this.checked = false;                       
        //         });
        //     }
        // }); 
        function toggle(box){
            checkboxes = document.getElementsByName('foo');
            for(var i=0,n=checkboxes.length;i<n;i++){
                checkboxes[i].checked = box.checked;
            }
        };
    </script>


</body>
</html>