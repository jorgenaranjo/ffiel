<div class="treemenu boxed">
    <div class="ui fluid styled accordion">

        <div class="title">
            <div class="header">
                <i class="treatment icon"></i> {{ trans('applicants.title') }}
                <i class="dropdown icon"></i>
            </div>
        </div>
        <div class="content">
            <div class="subtitle">
                <div class="menu">
                    <a class="item" href="{{ route('applicants.index') }}">{{ trans('applicants.title') }}</a>
                </div>
            </div>
        </div>

        <div class="title">
    	   <div class="header">
                <i class="browser icon"></i> {{ trans('low.header') }}
                <i class="dropdown icon"></i>
            </div>
        </div>
        <div class="content">
            <div class="subtitle">
                <div class="menu">
                    <a class="item" href="{{ route('admin.low.index') }}">{{ trans('low.title') }}</a>
                </div>
                <div class="menu">
                    <a class="item" href="{{ route('admin.records.index')}}"> Documentos escolares</a>
                </div>
            </div>
        </div>

        <div class="title">
            <div class="header">
                <i class="fa fa-user-secret"></i>@lang('employees.title')
                <i class="dropdown icon"></i>
            </div>
        </div>
        <div class="content">
            <div class="subtitle">
                <div class="menu">
                    <a class="item" href="{{ route('teachers.index') }}"> @lang('teachers.title')</a>
                </div>
            </div>
        </div>

    </div>
</div>