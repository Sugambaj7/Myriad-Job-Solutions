function printErr(errorId,msg){
    document.getElementById(errorId).innerHTML = msg;
}

function validate_date(){
    var date = new Date();
    var tdate = date.getDate();
    var month = date.getMonth()+1;
    var year = date.getUTCFullYear();


    const form_date =document.news_section.news_date.value;
    const news = document.news_section.news.value;
    dateErr = newsErr = false;


    if (tdate < 10){
        tdate = "0"+ tdate;
    }
    if (month < 10){
        month = "0"+ month;
    }
    
    var today_date = year + "-" + month + "-" + tdate;

    
    if(news == '' || news == null){
        printErr('newsErr',"News cannot be empty!")
        newsErr = true;
    }
    else if(news.length > 50){
        printErr('newsErr',"News cannot be greater than 50 characters!")
        newsErr = true;
    }
    else{
        printErr('newsErr',"")
        newsErr = false;
    }
    
    if(form_date == '' || form_date == null){
        printErr('dateErr',"Date cannot be empty!")
        dateErr = true;
    }
    else if(form_date < today_date || form_date > today_date){
        printErr('dateErr',"Date must be current date!")
        dateErr = true;
    }
    else{
        printErr('dateErr'," ")
        dateErr = false;
    }
    if(dateErr == true || newsErr == true){
        return false;
    }
    else if(dateErr == false || newsErr == false){
        return true;
    }
}
