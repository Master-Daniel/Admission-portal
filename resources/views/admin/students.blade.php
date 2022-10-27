@extends('layouts.app')

@section('contents')
    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h5 class="mb-0" data-anchor="data-anchor">Student Application</h5>
                </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="tab-content">
                    <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-f1f635ad-27f6-4e4f-8ac8-ea1fd3f4edd8" id="dom-f1f635ad-27f6-4e4f-8ac8-ea1fd3f4edd8">
                        <div id="tableExample2" data-list='{"valueNames":["name", "email", "department", "type", "cut", "credit", "action"],"page":5,"pagination":true}'>
                        <div class="table-responsive scrollbar">
                            <table class="table table-bordered table-striped fs--1 mb-0">
                            <thead class="bg-200 text-900">
                                <tr>
                                    <th class="sort" data-sort="name">Student Name</th>
                                    <th class="sort" data-sort="email">Email</th>
                                    <th class="sort" data-sort="department">Department</th>
                                    <th class="sort" data-sort="type">Exam Type</th>
                                    <th class="sort" data-sort="cut">Cut off Mark</th>
                                    <th class="sort" data-sort="credit">Number of Credit</th>
                                    <th class="sort" data-sort="action">Action</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                <tr>
                                    <td class="name">Anna</td>
                                    <td class="email">anna@example.com</td>
                                    <td class="department">Computer Science</td>
                                    <td class="type">WASSEC</td>
                                    <td class="cut">60</td>
                                    <td class="credit">18</td>
                                    <td class="action">
                                        <button class="btn btn-primary">Admit</button>
                                        <button class="btn btn-danger">Decline</button>
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-center mt-3"><button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                            <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
