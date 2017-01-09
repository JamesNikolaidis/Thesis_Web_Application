
 var config = {
    apiKey: "AIzaSyC2KIzULTgemkuZS7lyy9TVlmDr_GlLr4U",
    authDomain: "farmers-helper-44f7a.firebaseapp.com",
    databaseURL: "https://farmers-helper-44f7a.firebaseio.com",
    storageBucket: "farmers-helper-44f7a.appspot.com",
    messagingSenderId: "605783459774"
  };
  firebase.initializeApp(config);
  
  

function Create_New_Account(CompanyName,Company_Country,Company_Email,Url,Password_Country){
	alert("is ok");
	firebase.auth().createUserWithEmailAndPassword(Company_Email,Password).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
  // ...
});
	
	firebase.database().ref('Companies').push().set({
								Country : Company_Country,
								Name : CompanyName,
								Email :Company_Email,  
								CompanyUrl : Url,
								Password : Password_Country
	
	
	
	
}

functio Sign_In_Company(CompanyEmail,CompanyPassword){
	firebase.auth().signInWithEmailAndPassword(CompanyEmail, CompanyPassword).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
  // ...
});
	
	
}


