<!DOCTYPE html>
<html>
<head>
    <title>Web Page Design</title>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: white;
            position: relative; /* Needed for absolute positioning */
            min-height: 1300px; /* Ensure enough height for positioning */
        }

        .container {
            width: 960px;
            margin: 0 auto;
            position: relative; /* For inner positioning */
        }

        #main-title {
            color: #00BABA;
            font-size: 48px;
            font-weight: bold;
            text-align: center;
        }

        #sub-title {
            color: black;
            font-size: 32px;
            font-weight: bold;
            text-align: center;
        }

        .search-box {
            position: relative;
            margin-top: 20px;
            padding: 20px;
            background-color: white;
            border: 1px solid lightgrey;
            border-radius: 20px;
        }

        #search-bar {
            width: 80%;
            font-size: 23px;
            border: none;
            padding: 10px;
        }

        #advanced-search {
            position: absolute;
            bottom: 5px;
            left: 10px;
            font-size: 14px;
            color: black;
            background: none;
            border: none;
            cursor: pointer;
        }

        .options {
            position: absolute;
            bottom: 10px;
            right: 10px;
        }

        .options label {
            font-size: 16px;
            color: black;
            margin-right: 10px;
        }

        .options input[type="radio"] {
            border-color: #65cdc4;
        }

        .result-line, .question, .additional-question, .third-question {
            font-size: 20px;
        }

        .question, .additional-question, .third-question {
            color: #00BABA;
            font-weight: extrabold;
        }

        .details, .additional-details, .third-details {
            font-size: 16px;
            font-weight: light;
            font-style: italic;
            text-decoration: underline;
        }

        .additional-question, .third-question {
            margin-top: 20px; /* Adjust spacing as needed */
        }

        .additional-details, .third-details {
            margin-top: 10px; /* Adjust spacing as needed */
        }

        .message-box {
            background-color: #D9D9D9;
            width: 590px;
            height: 550px;
            margin-top: 100px; /* Adjust as needed */
            padding: 30px;
            position: relative; /* For inner positioning */
        }

        .input-area {
            position: absolute;
            top: 100px;
            left: 30px;
        }

        .input-box, .text-box, .large-text-box {
            background-color: white;
            height: 39px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .input-box {
            width: 158px;
        }

        .text-box {
            width: 300px;
            margin-left: 200px; /* Additional spacing for large box */

        }

        .large-text-box {
            width: 582px;
            height: 150px;
            margin-top: 50px; /* Additional spacing for large box */
            position: absolute;
            bottom: 100px; /* Position at the bottom */
        }

        .input-text, .question-text {
            font-family: 'Inter', sans-serif;
            color: #C4C4C4;
            font-weight: 600; /* Semibold */
            font-size: 10px;
        }

        .question-text {
            color: #C4C4C4;
            align-self: flex-start;
            margin-left: 10px;
        }

        .Submit box {
            background-color: #A4E2DA;
            height: 39px;
            weight: 100px:
            left: 300px; /* Distance from left */
            bottom: 500px; /* Distance from bottom */
        }
        .submit-text {
            font-family: 'Inter', sans-serif;
            color: Black;
            font-weight: 600; /* Semibold */
            font-size: 16px;
        }

        .contact-box, .info-box {
            width: 500px;
            position: absolute;
            left: 700px; /* Distance from left */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .contact-box {
            background-color: #A4E2DA;
            height: 125px;
            bottom: 400px; /* Distance from bottom */
        }

        .info-box {
            background-color: #D9D9D9;
            height: 250px;
            bottom: 150px; /* Distance from bottom */
        }

        .contact-text, .info-text {[p;
            font-family: 'Open Sans', sans-serif;
            color: black;
            font-weight: 1000; /* Extrabold */
            font-size: 40px;
        }

        .info-text {
            font-size: 36px;
        }

        


    </style>
</head>
<body>
    <div class="container">
        <h1 id="main-title">Ask Us!</h1>
        <p id="sub-title">Search and browse our Frequently Asked Questions</p>
        <div class="search-box">
            <input type="text" id="search-bar" placeholder="Search everything; the catalog, website, events & more ...">
            <button id="advanced-search">Advanced Search</button>
            <div class="options">
                <label><input type="radio" name="search-option"> Keyword</label>
                <label><input type="radio" name="search-option"> Topic</label>
            </div>
        </div>
        <div class="container">
            <p class="result-line">All Results:</p>
            <p class="question">What information literacy resources are available for faculty members to use in their classes?</p>
            <p class="details">Last Updated Oct 21 2019, 02:45pm | Topics: For Faculty, Instruction, Learning Resources, Information Literacy</p>
            <p class="additional-question">When checking out a book at the library, can I use a highlighter to mark important sections?</p>
            <p class="additional-details">Last Updated Oct 01 2019, 11:58am | Topics: Damaged Materials, Collections Care, For Library Users</p>
            <p class="third-question">How can I see what items I have checked out from the Libraries?</p>
            <p class="third-details">Last Updated Jan 02 2020, 02:41pm | Topics: Borrowing</p>
            <div class="message-box">
                <div class="input-area">
                    <div class="input-box">
                        <p class="input-text">Name</p>
                    </div>
                    
                    <div class="text-box"></div>

                    <div class="input-box">
                        <p class="input-text">Card Number</p>
                    </div>
                    <div class="text-box"></div>

                    <div class="input-box">
                        <p class="input-text">Email Address</p>
                    </div>
                    <div class="text-box"></div>
                </div>
                <div class="large-text-box">
                    <p class="question-text">Question</p>
                </div>
                <p class="send-message">Send message</p>
            </div>
        </div>
        <div class="contact-box">
            <p class="contact-text">Contact us</p>
        </div>
        <div class="info-box">
            <p class="info-text">More detailed address and contact information</p>
        </div>
        <div class="submit-box">
            <p class="submit-text">submit</p>
    </div>
</body>
</html>
