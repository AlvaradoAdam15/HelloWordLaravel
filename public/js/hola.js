function hello(){
    console.info("Hello World!");
}

function bye(){
    console.info("Bye world");
}

$(function(){
    $('#sayhello').click( function(){
        $('#helloworld').show();
    });
});
