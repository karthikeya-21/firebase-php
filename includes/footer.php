<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.17.1/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.17.1/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyCIzJa8W_yymA3PDaU6Vd4F9VZLNgTnv8E",
    authDomain: "fir-82aec.firebaseapp.com",
    databaseURL: "https://fir-82aec-default-rtdb.firebaseio.com",
    projectId: "fir-82aec",
    storageBucket: "fir-82aec.appspot.com",
    messagingSenderId: "288516285409",
    appId: "1:288516285409:web:6915c0d447d101bffde8a0",
    measurementId: "G-WFS30423LG"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>
</body>
</html>