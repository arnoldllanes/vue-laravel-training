<!DOCTYPE html>
<html>
    <head>
        <title>Vue Resource Plugin</title>
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

                        <strong @click="deleteTask(task)">X</strong>
                    </li>


            </ul>
        </template>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.21/vue.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.7.0/vue-resource.js"></script>
        <script src="/js/resource.main.js"></script>
    </body>
</html>
