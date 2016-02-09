<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../web/jobboard.php";

    $app = new Silex\Application();

    $app->get("/", function() {
          return '
          <html>
            <head>
              <meta charset="utf-8">
              <title></title>
            </head>
            <body>
              <form action="/jobboard">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input name="title" class="form-control" id="title" type="text">
                </div>
                <div class="form-group">
                  <label for="description">Job Description</label>
                  <input name="description" class="form-control" id="description" type="text">
                </div>
                <div class="form-group">
                  <label for="contact_info">Contact Info</label>
                  <input name="contact_info" class="form-control" id="contact_info" type="text">
                </div>
                <button type="submit" class="btn">SUBMIT</button>
              </form>
            </body>
          </html>
          ';
    });

    $app->get("/jobboard", function() {
      return '
        <!DOCTYPE html>
        <html>
          <head>
            <meta charset="utf-8">
            <title></title>
          </head>
          <body>
            result
          </body>
        </html>

      ';
    });

    $app->get("/view_jobboard", function() {
        $my_jobOpening = new JobOpening($_GET['title'], $_GET['description'], $_GET['contact_info']);
        return $_GET['title'];
});


    return $app;
?>
