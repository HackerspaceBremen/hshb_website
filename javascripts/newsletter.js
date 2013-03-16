function checkform() {
  for (i=0;i<fieldstocheck.length;i++) {
    if (eval("document.subscribeform.elements['"+fieldstocheck[i]+"'].type") == "checkbox") {
      if (document.subscribeform.elements[fieldstocheck[i]].checked) {
      } else {
        alert("Bitte geben Sie ein "+fieldnames[i]);
        eval("document.subscribeform.elements['"+fieldstocheck[i]+"'].focus()");
        return false;
      }
    }
    else {
      if (eval("document.subscribeform.elements['"+fieldstocheck[i]+"'].value") == "") {
        alert("Bitte geben Sie ein "+fieldnames[i]);
        eval("document.subscribeform.elements['"+fieldstocheck[i]+"'].focus()");
        return false;
      }
    }
  }
  for (i=0;i<groupstocheck.length;i++) {
    if (!checkGroup(groupstocheck[i],groupnames[i])) {
      return false;
    }
  }
  
  if(! compareEmail())
  {
    alert("Die E-Mail Adressen stimmen nicht &uuml;berein");
    return false;
  }
  return true;
}

var fieldstocheck = new Array();
var fieldnames = new Array();
function addFieldToCheck(value,name) {
  fieldstocheck[fieldstocheck.length] = value;
  fieldnames[fieldnames.length] = name;
}
var groupstocheck = new Array();
var groupnames = new Array();
function addGroupToCheck(value,name) {
  groupstocheck[groupstocheck.length] = value;
  groupnames[groupnames.length] = name;
}

function compareEmail()
{
  //return (document.subscribeform.elements["email"].value == document.subscribeform.elements["emailconfirm"].value);
  return true;
}
function checkGroup(name,value) {
  option = -1;
  for (i=0;i<document.subscribeform.elements[name].length;i++) {
    if (document.subscribeform.elements[name][i].checked) {
      option = i;
    }
  }
  if (option == -1) {
    alert ("Bitte geben Sie ein "+value);
    return false;
  }
  return true;
}