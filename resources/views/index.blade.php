<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!-- import CSS -->
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
</head>
<body>
<style>
    body {
        margin: 0px;
    }

    .question-item {
        margin: 15px 0px;
    }

    .question-title-container {
        font-weight: bold;
    }
</style>
<div id="app">
    @include('common.head')

    <div v-show="default_active == '/question/list'">
        @include('question.list')
    </div>

{{--    <div v-show="default_active == '/chat/index'">--}}
{{--        @include('chat.index')--}}
{{--    </div>--}}
</div>
</body>
<!-- import Vue before Element -->
<script src="https://unpkg.com/vue@2/dist/vue.js"></script>
<!-- import JavaScript -->
<script src="https://unpkg.com/element-ui/lib/index.js"></script>
<script>
    new Vue({
        el: '#app',
        data: function () {
            return {
                historyQuestions: [],
                questionData:[],
                data: {
                    data:[],
                },
                visible: false,
                activeIndex2: '/question/show'
            }
        },
        mounted(){
            this.handleSelect(this.default_active)
        },
        methods: {
            //question相关逻辑
            handleSelect(url) {
                window.location.href = url;
                return ;
                this.default_active = url;
                let that = this;
                fetch(url).then(response => response.json()).then(data => {
                    // that.data = data
                    // that.questionData = data.data;
                    Vue.set(this,'data',data);
                    // Vue.set(this,'questionData',data.data);

                    data.data.forEach((item, index) => {
                        Vue.set(that.questionData, index, item);
                    });

                    console.log(data)
                });
                console.log(url)
            },
            changePage(page){
                let that = this;
                fetch('/question/list?page=' + page).then(response => response.json()).then(data => {
                    // that.data = data
                    // data.data.forEach((item, index) => {
                    //     Vue.set(that.questionData, index, item);
                    // });

                    this.questionData.splice(0, this.questionData.length);
                    data.data.forEach(item => {
                    this.questionData.push(item);
                    });

                    // that.questionData.splice(0, that.questionData.length, ...data.data);
                    console.log(that.questionData)
                });
                console.log(page)
            }
        }
    })
</script>
</html>
