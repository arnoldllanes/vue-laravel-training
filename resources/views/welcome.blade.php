<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
        <!-- $tasks is from the back end database so I could use it for things like foreach($tasks as $task) but instead puts $tasks into json text-->
            <tasks></tasks>
        </div>

        <template id="tasks-template">
            <h1>My Tasks</h1>

            <ul class="list-group">
            <!-- Since using Vue I dont need to foreach $tasks, instead use v-for "task in list" -->
            <!-- Including the @ symbol it tells laravel to leave it alone and skip it-->
                    <li class="list-group-item" v-for="task in list">
                        @{{ task.body }}

                        <strong @click="delete(task)">X</strong>
                    </li>


            </ul>
        </template>

        <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.21/vue.js"></script>
        <script src="/js/main.js"></script>
    </body>
</html>
