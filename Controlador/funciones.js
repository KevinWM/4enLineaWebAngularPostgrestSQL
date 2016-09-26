function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
    console.log('Name: ' + profile.getName());
    console.log('Image URL: ' + profile.getImageUrl());
    console.log('Email: ' + profile.getEmail());
    
    document.getElementById('nombreUsuario').innerHTML = profile.getName();
    document.getElementById('login').style.display = 'none';
    document.getElementById('nombreUsuario').style.display = 'block';
    document.getElementById('logout').style.display = 'block';
}


function signOut() {
    
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
        console.log('User signed out.');
        document.getElementById('nombreUsuario').style.display = 'none';
        document.getElementById('login').style.display = 'block';
        document.getElementById('logout').style.display = 'none';
    });
}