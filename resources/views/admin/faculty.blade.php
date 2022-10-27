@extends('layouts.app')

@section('contents')
    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h5 class="mb-0" data-anchor="data-anchor">Faculty</h5>
                </div>
            </div>
        </div>
        <div class="card-body pt-0">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-f1f635ad-27f6-4e4f-8ac8-ea1fd3f4edd8" id="dom-f1f635ad-27f6-4e4f-8ac8-ea1fd3f4edd8">
                    <div id="tableExample2" data-list='{"valueNames":["name","count","action"],"page":5,"pagination":true}'>
                        <div class="table-responsive scrollbar">
                            <table class="table table-bordered table-striped fs--1 mb-0">
                              <thead class="bg-200 text-900">
                                  <tr>
                                  <th class="sort" data-sort="name">Faculty</th>
                                  <th class="sort" data-sort="count">Number of Department</th>
                                  <th class="sort" data-sort="action">Action</th>
                                  </tr>
                              </thead>
                              <tbody class="list">
                                  <tr>
                                    <td class="name">Anna</td>
                                    <td class="count">18</td>
                                    <td class="action">
                                      <button class="btn btn-info btn-sm">View</button>
                                      <button class="btn btn-primary btn-sm">Add New</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="name">Anna</td>
                                    <td class="count">18</td>
                                    <td class="action">
                                      <button class="btn btn-info btn-sm">View</button>
                                      <button class="btn btn-primary btn-sm">Add New</button>
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
