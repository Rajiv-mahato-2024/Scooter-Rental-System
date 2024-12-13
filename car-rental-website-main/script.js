document.addEventListener("DOMContentLoaded", () => {
    // Selectors for buttons and inputs
    const selectors = {
        loginBtn: document.querySelector(".login"),
        signupBtn: document.querySelector("input[value='Sign Up']"),
        rentCarBtn: document.querySelector("input[value='Rent Scooter']"),
        searchCarBtn: document.querySelector("#searchScooterBtn"),
        bookNowButtons: document.querySelectorAll(".price button"),
        viewAllBtn: document.querySelector("input[value='View All']"),
        userStatusDiv: document.querySelector(".btn") // Placeholder to display username
    };

    // State to hold session data
    let sessionData = {
        isLoggedIn: false,
        username: null,
    };

    // Fetch session data from the server
    const fetchSessionData = async () => {
        try {
            const response = await fetch('./session.php');
            if (response.ok) {
                sessionData = await response.json();
                updateUIBasedOnSession();
            } else {
                console.error("Failed to fetch session data");
            }
        } catch (error) {
            console.error("Error fetching session data:", error);
        }
    };

    // Update UI based on session state
    const updateUIBasedOnSession = () => {
        if (sessionData.isLoggedIn) {
            selectors.userStatusDiv.innerHTML = `<span>Welcome, ${sessionData.username}</span>`;
        } else {
            selectors.userStatusDiv.innerHTML = `
                <input class="login" type="button" value="Log in">
                <input type="button" value="Sign Up">
            `;
            addEventListenersForAuthButtons();
        }
    };

    // Function to navigate to a specific page
    const navigateTo = (url, message) => {
        if (message) alert(message);
        try {
            window.location.href = url;
        } catch (error) {
            console.error("Navigation failed:", error);
            alert("Failed to navigate. Please try again.");
        }
    };

    // Function to check if the user is logged in
    const isLoggedIn = () => sessionData.isLoggedIn;

    // Redirect to login page if not logged in
    const redirectToLoginIfNotLoggedIn = (message) => {
        if (!isLoggedIn()) {
            navigateTo("./login.html", message || "You need to be logged in to access this page.");
        }
    };

    // Add event listeners for authentication buttons
    const addEventListenersForAuthButtons = () => {
        const loginBtn = document.querySelector(".login");
        const signupBtn = document.querySelector("input[value='Sign Up']");

        loginBtn?.addEventListener("click", () => {
            navigateTo("./login.html", "Redirecting to the Login Page...");
        });

        signupBtn?.addEventListener("click", () => {
            navigateTo("./signup.html", "Redirecting to the Sign-Up Page...");
        });
    };

    // Event listener for search button
    selectors.searchCarBtn?.addEventListener("click", () => {
        redirectToLoginIfNotLoggedIn("Redirecting to the Search Page...");
        if (isLoggedIn()) {
            navigateTo("./viewall.php", "Redirecting to the Search Page...");
        }
    });

    selectors.rentCarBtn?.addEventListener("click", () => {
        console.log("Rent button clicked");
        redirectToLoginIfNotLoggedIn("You need to log in to rent a scooter.");
        if (isLoggedIn()) {
            console.log("User is logged in");
            navigateTo("./generalbooking.php", "Navigating to the Rent Scooter page...");
        } else {
            console.log("User is not logged in");
        }
    });
    

// Event listeners for book now buttons
selectors.bookNowButtons?.forEach((button, index) => {
    button.addEventListener("click", () => {
        redirectToLoginIfNotLoggedIn(`You need to log in to book this scooter.`);
        if (isLoggedIn()) {
            const fileName = `Booking${index + 1}.html`; // Generate the file name based on the index
            window.location.href = fileName; // Redirect to the corresponding file
        }
    });
});


    // Event listener for view all button
    selectors.viewAllBtn?.addEventListener("click", () => {
        redirectToLoginIfNotLoggedIn("Viewing all available scooters...");
        if (isLoggedIn()) {
            navigateTo("./viewall.html", "Viewing all available scooters...");
        }
    });

    // Initialize by fetching session data
    fetchSessionData();
});
