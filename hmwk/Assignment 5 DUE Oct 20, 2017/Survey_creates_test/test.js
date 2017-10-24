Survey.Survey.cssType = "bootstrap";
Survey.defaultBootstrapCss.navigationButton = "btn btn-green";

window.survey = new Survey.Model({ cookieName: "myuniquesurveyid",
    questions: [
    { type: "checkbox", name: "car", title: "What car are you driving?", isRequired: true, 
     colCount: 4, choices: ["None", "Ford", "Vauxhall", "Volkswagen", "Nissan", "Audi", "Mercedes-Benz", "BMW", "Peugeot", "Toyota", "Citroen"] }
]});
survey.onComplete.add(function(result) {
    document.querySelector('#surveyResult').innerHTML = "result: " + JSON.stringify(result.data);
});


function onAngularComponentInit() {
    Survey.SurveyNG.render("surveyElement", { 
        model: survey 
    });
}
var HelloApp =
    ng.core
        .Component({
            selector: 'ng-app',
            template: '<div id="surveyContainer" class="survey-container contentcontainer codecontainer"><div id="surveyElement"></div></div> '})
        .Class({
            constructor: function() {
            },
            ngOnInit: function() {
                onAngularComponentInit();
            }
    });
document.addEventListener('DOMContentLoaded', function() {
    ng.platformBrowserDynamic.bootstrap(HelloApp);
});
