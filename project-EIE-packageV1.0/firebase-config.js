 // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyBIl29WxbH2-1vWCGpIT_68U3Mbm-4wz4c",
    authDomain: "test-form-7e3b5.firebaseapp.com",
    projectId: "test-form-7e3b5",
    storageBucket: "test-form-7e3b5.appspot.com",
    messagingSenderId: "43878745864",
    appId: "1:43878745864:web:41f63236392a462ac7cebd"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

const db = firebase.firestore();
db.settings({timestampsInSnapshots: true});