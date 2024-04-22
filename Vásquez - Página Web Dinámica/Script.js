function addField(id, inputName) 
{
    var section = document.getElementById(id);
    var newField = document.createElement('input');
    newField.setAttribute('type', 'text');
    newField.setAttribute('name', inputName); 
    section.appendChild(newField);
}
