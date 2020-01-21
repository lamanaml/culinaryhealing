const Handlebars = require("handlebars");
const template = Handlebars.compile("Name: {{name}}");
const compiledTemplate = require("./template.handlebars");
console.log(template({ name: "Nils" }));