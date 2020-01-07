$("#submit").click(function () {
    var data=$('.input_link').serialize();
    $.ajax({
        type:'get',
        url:"input_link",
        data:data,
        succes:function () {
       // 	 $('.tampildata').load("http://test.test/");   
        }
    })

 });
