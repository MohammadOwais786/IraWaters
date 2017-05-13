Survey.Survey.cssType = "bootstrap";

var surveyJSON = {"pages":[{"name":"page1","elements":[{"type":"radiogroup","name":"Do you want to save water? ","choices":[{"value":"1","text":"Yes"},{"value":"2","text":"No"},{"value":"3","text":"Maybe"}]},{"type":"radiogroup","name":"Do you know what is Rainwater Harvesting?","choices":[{"value":"1","text":"Yes"},{"value":"2","text":"No"}]},{"type":"radiogroup","name":"Do you have a borewell in your premises?","choices":[{"value":"1","text":"Yes"},{"value":"2","text":"No"}]},{"type":"radiogroup","name":"Do you use LEDs to save electricity?","choices":[{"value":"1","text":"Yes"},{"value":"2","text":"No"}]},{"type":"radiogroup","name":"Do you use solar?","choices":[{"value":"1","text":"Yes"},{"value":"2","text":"No"}]}]}]}

function sendDataToServer(survey) {
    survey.sendResult('738d8f31-d300-4432-830c-d8f86bfd5b63');
}

var survey = new Survey.Model(surveyJSON);
$("#surveyContainer").Survey({
    model: survey,
    onComplete: sendDataToServer
});
