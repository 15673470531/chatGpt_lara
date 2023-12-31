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
                    :total="data.last_page" style="text-align: center">
                </el-pagination>
            </el-col>
        </el-row>
    </el-main>
    <el-footer>我是尾部</el-footer>
</el-container>
