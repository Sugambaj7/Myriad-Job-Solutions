function printErr(errorId,msg){
    document.getElementById(errorId).innerHTML = msg;
}

function validate_date(){
    var date = new Date();
    var tdate = date.getDate();
    var month = date.getMonth()+1;
    var year = date.getUTCFullYear();


    const form_date =document.interview.inter_date.value;
    const form_interview_time = document.interview.inter_time.value;

    var today = new Date();
    var hours = today.getHours();
    var  minutes = today.getMinutes();
    var time = hours + ":" + minutes;
    var ampm = hours >= 12 ? 'pm' : 'am';
    var current_time = time + " " +ampm;
    
    
    // const news = document.news_section.news.value;
    dateErr = timeErr = false;


    if (tdate < 10){
        tdate = "0"+ tdate;
    }
    if (month < 10){
        month = "0"+ month;
    }
    
    var today_date = year + "-" + month + "-" + tdate;

    
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

    if(form_interview_time == '' || form_interview_time == null){
        printErr('timeErr',"Interview time cannot be empty!")
        timeErr = true;
    }
    else if(form_interview_time < current_time ){
        printErr('timeErr',"Interview time must be greater than or equal to current time!")
        timeErr = true;
    }
    else{
        printErr('timeErr'," ")
        timeErr = false;
    }

    if(dateErr == true || timeErr == true){
        return false;
    }
    else if(dateErr == false || timeErr == false){
        return true;
    }
}
