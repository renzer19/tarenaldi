
  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />

    <title>Task Managing App</title>
  </head>
  <body style="background-color: #1f2631;">
      <div class="container">
        <div class="row">
          <div style="margin-top: 2rem;" class="col s12 m10 offset-m1 l8 offset-l2 xl6 offset-xl3 section">
            <div class="card" style="border-radius: 12px;">
              <div class="card-content" >
                <span class="card-title">Task Managing App</span>
                <form id="task-form">
                  <div class="input-field">
                    <input type="text" name="task" id="task" />
                    <label for="task">New Task</label>
                  </div>
                  <button
                    class="btn waves-effect waves-light"
                    type="submit"
                    name="action"
                  >
                    Add Task <i class="material-icons right">send</i>
                  </button>
                </form>
              </div>
              <div class="card-action" style="border-bottom-left-radius: 12px;border-bottom-right-radius: 12px;">
                <h5>Tasks</h5>
                <div class="input-field col s12">
                  <input type="text" name="filter" id="filter" />
                  <label for="filter">Filter tasks</label>