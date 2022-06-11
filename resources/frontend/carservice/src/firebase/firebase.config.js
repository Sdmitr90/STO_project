import { initializeApp } from "https://www.gstatic.com/firebasejs/9.8.1/firebase-app.js";

const firebaseConfig = {
  apiKey: "AIzaSyAVA_Hog45iBfr9VDEr5bhsEDHXwG_T9a8",
  authDomain: "fb-test-project-82650.firebaseapp.com",
  databaseURL: "https://fb-test-project-82650-default-rtdb.europe-west1.firebasedatabase.app",
  projectId: "fb-test-project-82650",
  storageBucket: "fb-test-project-82650.appspot.com",
  messagingSenderId: "813270797155",
  appId: "1:813270797155:web:bcedf9fef83be3ed00a156"
};

export const fb = initializeApp(firebaseConfig);
