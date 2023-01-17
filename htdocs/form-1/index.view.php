<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>

<body>

    <main id="main" class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-offset-3 col-lg-6">
                <form method="GET" action="" id="survey-form" name="survey-form">
                    <fieldset>
                        <label for="name" id="name-label">
                            Name *
                            <input class="" type="text" id="name" name="name" placeholder="Enter your name (required)" required />
                        </label>
                    </fieldset>
                    <fieldset>
                        <label for="number" id="number-label">
                            Age *
                            <input class="" type="number" id="number" name="number" min="8" max="112" placeholder="Enter you age (required)" required />
                        </label>
                    </fieldset>
                    <fieldset>
                        <label for="dropdown">
                            Which option best describes your current role? *
                            <select id="dropdown" name="dropdown" class="m-t-xs">
                                <option value="student" selected>Student</option>
                                <option value="ftLob">Full Time Job</option>
                                <option value="ftLearner">Full Time Learner</option>
                                <option value="notSaying">Prefer not to say</option>
                                <option value="other">Other</option>
                            </select>
                        </label>
                    </fieldset>
                    <fieldset>
                        <div class="labels">
                            How likely is that you would recommend freeCodeCamp to a friend? *
                        </div>
                        <label class="m-b-xs">
                            <input type="radio" name="survey-form-gender" value="definitely" checked /> Definitely
                        </label>
                        <label class="m-b-xs">
                            <input type="radio" name="survey-form-gender" value="maybe" /> Maybe
                        </label>
                        <label class="m-b-xs">
                            <input type="radio" name="survey-form-gender" value="notSure" /> Not sure
                        </label>
                    </fieldset>

                    <fieldset>
                        <div class="labels">
                            Things that should be improved in the future (Check all that apply):
                        </div>
                        <label for="survey-form-improve1" class="m-b-xs">
                            <input type="checkbox" id="survey-form-improve1" value="feProjects">
                            Front-end Projects
                        </label>
                        <label for="survey-form-improve2" class="m-b-xs">
                            <input type="checkbox" id="survey-form-improve2" value="beProjects">
                            Back-end Projects
                        </label>
                        <label for="survey-form-improve3" class="m-b-xs">
                            <input type="checkbox" id="survey-form-improve3" value="dataVisualization">
                            Data Visualization
                        </label>
                        <label for="survey-form-improve4" class="m-b-xs">
                            <input type="checkbox" id="survey-form-improve4" value="challenges">
                            Challenges
                        </label>
                        <label for="survey-form-improve5" class="m-b-xs">
                            <input type="checkbox" id="survey-form-improve5" value="openSources">
                            Open Source Community
                        </label>
                    </fieldset>

                    <button id="submit" type="submit" class="btn">Submit the form</button>
                </form>
                <div class="copyright m-t-sm">
                    <div>Riffed from Adèle Royer via their CodePen. <i class="glyphicon glyphicon-heart"></i></div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>