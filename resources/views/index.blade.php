<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div id="main">
  <div id="bg"></div>
  <div id="cover"></div>
  <div id="form-outer">
    <div id="form-container">
      <h1 id="title">Survey Form</h1>
      <p id="description">
        Let us know how we can improve All Hands on Tech!

      </p>
      <form id="survey-form" method="GET" action="https://crossorigin.me/https://freecodecamp.com">
        <div class="form-row">
          <label id="name-label" for="name">Name <span class="required">*</span></label>
          <input id="name" type="text" class="input-field-1" placeholder="Enter Your Name" required>
        </div>
        <div class="form-row">
          <label id="email-label" for="email">Email <span class="required">*</span></label>
          <input id="email" type="email" class="input-field-1" placeholder="Enter Your Email" required>
        </div>
        <div class="form-row">
          <label id="number-label" for="age">Age  <span class="required">*</span></label>
          <input id="number" type="number" class="input-field-1" min="1" max="125" placeholder="Age" required>
        </div>
        <div class="form-row">
          <label for="currentPos">Which option best describes your <span class="break">current role? </span><span class="required">*</span></label>
          <select id="dropdown" name="currentPos" class="dropdown input-field-1" required>
            <option disabled value selected>Select an option</option>
            <option value="student">Student</option>
            <option value="job">Full Time Job</option>
            <option value="learner">Full Time Learner</option>
            <option value="preferNo">Prefer Not to Say</option>
            <option value="other">Other</option>
          </select>
        </div>
        <div class="form-row">
          <label for="userRating">How likely would you recommend AllHandsOnTech to <span class="break">a friend? </span><span class="required">*</span></label>
          <ul style="list-style-type: none">
            <li>
              <label class="radio"><input type="radio" class="userRating" name="userRating" value="1" required>Definitely<span class="radio-button"></span></label>
            </li>
            <li>
              <label class="radio"><input type="radio" class="userRating" name="userRating" value="2" required checked>Maybe<span class="radio-button"></span></label>
            </li>
            <li>
              <label class="radio"><input type="radio" class="userRating" name="userRating" value="3" required>Not Sure<span class="radio-button"></span></label>
            </li>
          </ul>
        </div>
        <div class="form-row">
          <label for="mostLike">Gender <span class="break">: </span></label>
          <select id="dropdown" name="mostLike" class="dropdown input-field-1" required>

            <option value="challenges">Female</option>
            <option value="projects">Male</option>

          </select>
        </div>
        <div class="form-row">
          <label for="preferences">Things that should be improved in the future
(Check all <span class="break">that apply): </span></label>
          <ul style="list-style-type: none">
            <li>
              <label class="check"><input type="checkbox" class="preferences" name="preferences" value="1">Front-end Projects<span class="checkbox"></span></label>
            </li>
            <li>
              <label class="check"><input type="checkbox" class="preferences" name="preferences" value="2">Back-end Projects<span class="checkbox"></span></label>
            </li>
            <li>
              <label class="check"><input type="checkbox" class="preferences" name="preferences" value="3">Data Visualization<span class="checkbox"></span></label>
            </li>
            <li>
              <label class="check"><input type="checkbox" class="preferences" name="preferences" value="4">Challenges<span class="checkbox"></span></label>
            </li>


            <li>
              <label class="check"><input type="checkbox" class="preferences" name="preferences" value="8">City Meetups<span class="checkbox"></span></label>
            </li>


            <li>
              <label class="check"><input type="checkbox" class="preferences" name="preferences" value="11">Additional Courses<span class="checkbox"></span></label>
            </li>
          </ul>
        </div>
        <div class="form-row">
          <label for="comments">Any Comments or Suggestions? <span class="required">*</span></label>
          <textarea id="comments" class="comments input-field-2" placeholder="Enter your comment here" required></textarea>
        </div>
        <div class="form-row">
          <button id="submit" type="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="app.js"></script>
</body>
</html>
