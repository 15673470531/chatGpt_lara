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
    <el-container>
        {{--        <el-header>我是头部</el-header>--}}
        <el-main>
            <el-row class="question-container" type="flex" justify="center">
                <el-col :span="10">
                    @foreach($questionData['data'] as $question)
                        <el-row class="question-item" :gutter="0">
                            <el-col :span="24">
                                <div class="grid-content bg-purple">
                                    <el-card shadow="hover">
                                        <div slot="header"
                                             class="question-title-container">{{ $question['question'] }}
                                        </div>
                                        <div class="question-content-container">{{$question['reply_content']}}</div>
                                    </el-card>
                                </div>
                            </el-col>
                        </el-row>
                    @endforeach
                    <el-pagination
                        @current-change="changePage"
                        background
                        layout="prev, pager, next"
                        :current-page="{{$questionData['current_page']}}"
                        :total="{{$questionData['last_page']}}" style="text-align: center">
                    </el-pagination>
                </el-col>
            </el-row>
        </el-main>
{{--        <el-footer>我是尾部</el-footer>--}}
    </el-container>
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
                historyQuestions: [
                ],
                data: [],
                visible: false,
                activeIndex2: '/question/show',
                default_active: '/question/show',
                path:'/question/show',
            }
        },
        methods: {
            handleSelect(url, path) {
                if (url != this.default_active){
                    window.location.href = url;
                }
                return ;
            },
            changePage(page){
                let path = this.path + '/' + page;
                window.location.href = path;
                return ;
            },
        }
    })
</script>
</html>
