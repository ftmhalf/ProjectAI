//selecting all required elements
const start_btn = document.querySelector(".start_btn button");
const info_box = document.querySelector(".info_box");
const exit_btn = info_box.querySelector(".buttons .quit");
const continue_btn = info_box.querySelector(".buttons .restart");
const quiz_box = document.querySelector(".quiz_box");
const result_box = document.querySelector(".result_box");
const option_list = document.querySelector(".option_list");
const time_line = document.querySelector("header .time_line");

// if startQuiz button clicked
start_btn.onclick = ()=>{
    info_box.classList.add("activeInfo"); //show info box
}

//if exitQuiz button clicked
exit_btn.onclick = ()=>{
    info_box.classList.remove("activeInfo"); //hide info box
}

//if continueQuiz button clicked
continue_btn.onclick = ()=>{
    info_box.classList.remove("activeInfo"); //hide info box
    quiz_box.classList.add("activeQuiz"); //show quiz box
    showQuetions(0); //calling showQestions function
}

let que_count = 0;
let userScore = 0;
let widthValue = 0;

const restart_quiz = result_box.querySelector(".buttons .restart");
const quit_quiz = result_box.querySelector(".buttons .quit");

// if restartQuiz button clicked
restart_quiz.onclick = ()=>{
    quiz_box.classList.add("activeQuiz"); //show quiz box
    result_box.classList.remove("activeResult"); //hide result box
    que_count = 0;
    userScore = 0;
    widthValue = 0;
    showQuetions(que_count); //calling showQestions function
    queCounter(que_numb); //passing que_numb value to queCounter
    next_btn.classList.remove("show"); //hide the next button
}

// if quitQuiz button clicked
quit_quiz.onclick = ()=>{
    window.location.reload(); //reload the current window
}

const next_btn = document.querySelector("footer .next_btn");
const bottom_ques_counter = document.querySelector("footer .total_que");

// if Next Que button clicked
next_btn.onclick = ()=>{
    if(que_count < questions.length - 1){ //if question count is less than total question length
        que_count++; //increment the que_count value
        showQuetions(que_count); //calling showQestions function
        next_btn.classList.remove("show"); //hide the next button
    }else{
        showResult(); //calling showResult function
    }
}

// getting questions and options from array
function showQuetions(index){
    const que_text = document.querySelector(".que_text");

    //creating a new span and div tag for question and option and passing the value using array index
    if(index==5){
        let que_tag = '<span>'+ questions[index].question +'</span>';
        let option_tag = '<div class="option"><span><input type="radio" id="one" name="ans" value="one"><label for="one">'+ questions[index].options[0] +'</label></span></div>'
        + '<div class="option"><span><input type="radio" id="two" name="ans" value="two"><label for="two">'+ questions[index].options[1] +'</label></span></div>' 
        + '<div class="option"><span><input type="radio" id="three" name="ans" value="three"><label for="three">'+ questions[index].options[2] +'</label></span></div>'
        + '<div class="option"><span><input type="radio" id="four" name="ans" value="four"><label for="four">'+ questions[index].options[3] +'</label></span></div>'; 
        que_text.innerHTML = que_tag; //adding new span tag inside que_tag
        option_list.innerHTML = option_tag; //adding new div tag inside option_tag
    }
    else if(index==6){
        let que_tag = '<span>'+ questions[index].question +'</span>';
        let option_tag = '<div class="option"><span><input type="radio" id="yes" name="ans" value="yes"><label for="yes">'+ questions[index].options[0] +'</label></span></div>'
    + '<div class="option"><span><input type="radio" id="no" name="ans" value="no"><label for="no">'+ questions[index].options[1] +'</label></span></div>'
    + '<div class="option"><span><input type="radio" id="three" name="ans" value="three"><label for="three">'+ questions[index].options[2] +'</label></span></div>';
    que_text.innerHTML = que_tag; //adding new span tag inside que_tag
    option_list.innerHTML = option_tag; //adding new div tag inside option_tag
}
    else{
       let que_tag = '<span>'+ questions[index].question +'</span>';
    let option_tag = '<div class="option"><span><input type="radio" id="one" name="ans" value="one"><label for="one">'+ questions[index].options[0] +'</label></span></div>'
    + '<div class="option"><span><input type="radio" id="two" name="ans" value="two"><label for="two">'+ questions[index].options[1] +'</label></span></div>'; 
    que_text.innerHTML = que_tag; //adding new span tag inside que_tag
    option_list.innerHTML = option_tag; //adding new div tag inside option_tag
} 
    const option = option_list.querySelectorAll(".option");

    // set onclick attribute to all available options
    for(i=0; i < option.length; i++){
        option[i].setAttribute("onclick", "optionSelected(this)");
    }
}

//if user clicked on option
function optionSelected(answer){
    next_btn.classList.add("show"); //show the next button if user selected any option
}

function showResult(){
    info_box.classList.remove("activeInfo"); //hide info box
    quiz_box.classList.remove("activeQuiz"); //hide quiz box
    result_box.classList.add("activeResult"); //show result box
    const scoreText = result_box.querySelector(".score_text");
    let scoreTag = '<span>and, You got <p>'+ userScore +'</p></span>';
    scoreText.innerHTML = scoreTag;
}