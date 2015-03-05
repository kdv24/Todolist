<!DOCTYPE html>
  <head>

    <title>Places We've Been</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>

  </head>
    <body>
        <div class='container'>
        {% if tasks is not empty %}
        <p>Here al your tasks</p>
        <ul>
            {% for task tasks %}
                <li>{{task.getDescription}}</li>
            {% endfor %}
        </ul>
        {%  endif %}


        <form action='/tasks' method='post'>
                       <label for='description'>Task Description</label>
                       <input id='description' name='description' type='text'>
                       <button type='submit'>Add task</button>
                   </form>

        <form action='/delete' method='post'>

                   <button type='submit'>Clear All</button>
                  </form>

        </div>
    </body>
</html>
