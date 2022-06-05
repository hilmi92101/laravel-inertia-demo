<template> 
    
    <div class="container mx-auto px-4">
        <form @submit.prevent="addNewTodo">
            <div class="w-3/3 mt-6">
                <label for="Name" class="block mb-1 text-sm text-gray-600">
                    Todo
                </label>
                <input
                    v-model="newTodo"
                    type="text"
                    name="name"
                    class="
                    w-full
                    px-4
                    py-2
                    text-base
                    border border-gray-300
                    rounded
                    outline-none
                    focus:ring-blue-500 focus:border-blue-500 focus:ring-1
                    "
                />
            </div>
            <button
                class="px-6 py-2 font-semibold text-white border-b-4 rounded bg-cyan-500 border-cyan-800 hover:border-cyan-600 mt-6"
                type="submit"
            >
                Add
            </button>
        </form>

        <button
            @click="markAllDone"
            class="px-6 py-2 font-semibold text-white border-b-4 rounded bg-cyan-500 border-cyan-800 hover:border-cyan-600 mt-6"
            type="submit"
        >
            All done
        </button>
        <button
            @click="removeAllTodo"
            class="px-6 py-2 font-semibold text-white border-b-4 rounded bg-red-500 border-red-800 hover:border-red-600 mt-6"
            type="submit"
        >
            Remove All
        </button>
        <div class="w-3/3 bg-white rounded-lg shadow mt-8">
            <ul class="divide-y-2 divide-gray-100">
                <li 
                     
                    v-for="(todo, index) in todos" :key="todo.id" 
                    class="p-3"
                    :class="{ 'line-through': todo.done }"
                    
                >
                    
                    <span @click="toggleDone(todo)">{{ todo.content }}</span>
                    <button 
                        @click.prevent="removeTodo(index)"
                        class="px-6 py-2 font-semibold text-white border-b-4 rounded bg-red-500 border-red-800 hover:border-red-600 mt-6">
                        Remove
                    </button>
                </li>
            </ul>
        </div>
    </div>

</template>  
<script>  

    import { ref, computed } from 'vue';

    export default {  
        components: {
        },
        setup() {

            const newTodo = ref('');
            const todos = ref([]);

            function addNewTodo(){
                todos.value.push({
                    id: Date.now(),
                    done: false,
                    content: newTodo.value,
                });

                newTodo.value = '';
            }

            function toggleDone(todo){
                todo.done = !todo.done;
            }

            function removeTodo(index){
                todos.value.splice(index, 1);
            }

            function markAllDone(){
                todos.value.forEach((todo) => {
                    todo.done = !todo.done;

                });
            }

            function removeAllTodo(){
                todos.value = [];
            }

            return { 
                newTodo,
                addNewTodo, 
                todos, 
                toggleDone, 
                removeTodo,
                markAllDone,
                removeAllTodo
            };
            
        }
    }
        
</script>

