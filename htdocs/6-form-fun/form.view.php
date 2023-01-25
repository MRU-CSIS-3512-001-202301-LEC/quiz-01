<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>

<body>


    <form method="POST" action="<?= $_SERVER["SCRIPT_NAME"] ?>">

        <label for="au-name" id="authorized-user-label">Authorized User*</label>
        <input type="text" id="au-name" name="authorized-user-name">
        <br>

        <label for="gl-level" id="lethality-level-label">Lethality Level*</label>
        <input type="number" id="gl-level" name="lethality-level" value="<?= $lethality ?? '' ?>">
        <br>

        <fieldset>
            <div>
                Which gizmo are you activating? *
            </div>
            <input type="radio" name="gizmo-type" id="smoosher" value="smoosher" checked>
            <label for="smoosher">The Smoosher</label>
            <br>
            <input type="radio" name="gizmo-type" id="slicer" value="slicer">
            <label for="slicer">The Slice-o-matic</label>
            <br>
            <input type="radio" name="gizmo-type" id="burninator" value="burninator">
            <label for="burninator">The Burninator</label>
        </fieldset>

        <button id="submit" type="submit">Activate Gizmo</button>
    </form>


</body>

</html>