var json = { questions: [ { type: "radiogroup", hasOther: true, isRequired: true, name: "favorite", colCount: 2,
     title: "1. If your Raspberry Pi touch screen is upside-down on the case what is best file for you edit?",
    choices: [{ value: "a. /etc/skel/shells", text: "a. /etc/skel/shells" }, 
       {value: "a. /etc/skel/shells",text: "a. /etc/skel/shells"},
	   {value: "b. /boot/rc1/screen",text: "b. /boot/rc1/screen"},
       {value: "c. /boot/ipconfig/screen", text: "c. /boot/ipconfig/screen"},
	   {value: "d. /config/txt", text: "d. /config/txt"},
	   {value: "e. /config/screen", text: "e. /config/screen"} ]}],
       completedHtml: "Your best edit file is <b>favorite</b>"}

var json = { questions: [ { type: "radiogroup", hasOther: true, isRequired: true, name: "favorite", colCount: 2,
     title: "2. What is the best code you type to make the Raspberry Pi touch screen show right side up on the case?",
    choices: [{ value: "a.screen=rightsideup", text: "a.screen=rightsideup" }, 
       {value: "b. lcd_rotate=180",text: "b. lcd_rotate=180"},
	   {value: "c. lcd_rotate=90",text: "c. lcd_rotate=90"},
       {value: "d. lcd_rotate=2", text: "d. lcd_rotate=2"},
	   {value: "e. lcd_rotate=4", text: "e. lcd_rotate=4"} ]}],
       completedHtml: "Your best edit file is <b>favorite</b>"}

Survey.defaultBootstrapCss.navigationButton = "btn btn-green";
Survey.Survey.cssType = "bootstrap";

var survey = new Survey.Model(json);

survey.onComplete.add(function(result) {
	document.querySelector('#result').innerHTML = "result: " + JSON.stringify(result.data);
});

var converter = new showdown.Converter();
survey.onTextMarkdown.add(function(survey, options){
    //convert the mardown text to html
    var str = converter.makeHtml(options.text);
    //remove root paragraphs <p></p>
    str = str.substring(3);
    str = str.substring(0, str.length - 4);
    //set html
    options.html = str;
});

$("#surveyElement").Survey({
  model: survey
});

https://surveyjs.io/Overview/Library/
