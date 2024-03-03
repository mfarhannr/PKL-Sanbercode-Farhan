@extends('layouts.app')

@section('content')
 <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Invoices</h3>
                  </div>
                  <div class="card-body border-bottom py-3">
                    <div class="d-flex">
                      <div class="text-secondary">
                        Show
                        <div class="mx-2 d-inline-block">
                          <input type="text" class="form-control form-control-sm" value="8" size="3" aria-label="Invoices count" autofill-information="overall type: UNKNOWN_TYPE
html type: HTML_TYPE_UNSPECIFIED
server type: NO_SERVER_DATA
heuristic type: UNKNOWN_TYPE
label: Invoices count
parseable name: 
section: _0_708
field signature: 1318412689
form signature: 17685059741038095652
form signature in host form: 3051392309218509821
alternative form signature: 10099775067853447378
field frame token: E5A146F9EE24C65579076DBEE0AF6904
form renderer id: 0
field renderer id: 709
visible: true
focusable: true
field rank: 1
field rank in signature group: 1
field rank in host form: 0
field rank in host form signature group: 0" title="overall type: UNKNOWN_TYPE
html type: HTML_TYPE_UNSPECIFIED
server type: NO_SERVER_DATA
heuristic type: UNKNOWN_TYPE
label: Invoices count
parseable name: 
section: _0_708
field signature: 1318412689
form signature: 17685059741038095652
form signature in host form: 3051392309218509821
alternative form signature: 10099775067853447378
field frame token: E5A146F9EE24C65579076DBEE0AF6904
form renderer id: 0
field renderer id: 709
visible: true
focusable: true
field rank: 1
field rank in signature group: 1
field rank in host form: 0
field rank in host form signature group: 0" autofill-prediction="UNKNOWN_TYPE">
                        </div>
                        entries
                      </div>
                      <div class="ms-auto text-secondary">
                        Search:
                        <div class="ms-2 d-inline-block">
                          <input type="text" class="form-control form-control-sm" aria-label="Search invoice" autofill-information="overall type: UNKNOWN_TYPE
html type: HTML_TYPE_UNSPECIFIED
server type: NO_SERVER_DATA
heuristic type: UNKNOWN_TYPE
label: Search invoice
parseable name: 
section: _0_708
field signature: 1318412689
form signature: 17685059741038095652
form signature in host form: 3051392309218509821
alternative form signature: 10099775067853447378
field frame token: E5A146F9EE24C65579076DBEE0AF6904
form renderer id: 0
field renderer id: 710
visible: true
focusable: true
field rank: 2
field rank in signature group: 2
field rank in host form: 1
field rank in host form signature group: 1" title="overall type: UNKNOWN_TYPE
html type: HTML_TYPE_UNSPECIFIED
server type: NO_SERVER_DATA
heuristic type: UNKNOWN_TYPE
label: Search invoice
parseable name: 
section: _0_708
field signature: 1318412689
form signature: 17685059741038095652
form signature in host form: 3051392309218509821
alternative form signature: 10099775067853447378
field frame token: E5A146F9EE24C65579076DBEE0AF6904
form renderer id: 0
field renderer id: 710
visible: true
focusable: true
field rank: 2
field rank in signature group: 2
field rank in host form: 1
field rank in host form signature group: 1" autofill-prediction="UNKNOWN_TYPE">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap datatable">
                      <thead>
                        <tr>
                          <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices" autofill-information="overall type: UNKNOWN_TYPE
html type: HTML_TYPE_UNSPECIFIED
server type: NO_SERVER_DATA
heuristic type: UNKNOWN_TYPE
label: Select all invoices
parseable name: 
section: _0_708
field signature: 1067852723
form signature: 17685059741038095652
form signature in host form: 3051392309218509821
alternative form signature: 10099775067853447378
field frame token: E5A146F9EE24C65579076DBEE0AF6904
form renderer id: 0
field renderer id: 711
visible: true
focusable: true
field rank: 3
field rank in signature group: 0
field rank in host form: 2
field rank in host form signature group: 0" title="overall type: UNKNOWN_TYPE
html type: HTML_TYPE_UNSPECIFIED
server type: NO_SERVER_DATA
heuristic type: UNKNOWN_TYPE
label: Select all invoices
parseable name: 
section: _0_708
field signature: 1067852723
form signature: 17685059741038095652
form signature in host form: 3051392309218509821
alternative form signature: 10099775067853447378
field frame token: E5A146F9EE24C65579076DBEE0AF6904
form renderer id: 0
field renderer id: 711
visible: true
focusable: true
field rank: 3
field rank in signature group: 0
field rank in host form: 2
field rank in host form signature group: 0" autofill-prediction="UNKNOWN_TYPE"></th>
                          <th class="w-1">No. <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 15l6 -6l6 6"></path></svg>
                          </th>
                          <th>Invoice Subject</th>
                          <th>Client</th>
                          <th>VAT No.</th>
                          <th>Created</th>
                          <th>Status</th>
                          <th>Price</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice" autofill-information="overall type: UNKNOWN_TYPE
html type: HTML_TYPE_UNSPECIFIED
server type: NO_SERVER_DATA
heuristic type: UNKNOWN_TYPE
label: Select invoice
parseable name: 
section: _0_708
field signature: 1067852723
form signature: 17685059741038095652
form signature in host form: 3051392309218509821
alternative form signature: 10099775067853447378
field frame token: E5A146F9EE24C65579076DBEE0AF6904
form renderer id: 0
field renderer id: 712
visible: true
focusable: true
field rank: 4
field rank in signature group: 1
field rank in host form: 3
field rank in host form signature group: 1" title="overall type: UNKNOWN_TYPE
html type: HTML_TYPE_UNSPECIFIED
server type: NO_SERVER_DATA
heuristic type: UNKNOWN_TYPE
label: Select invoice
parseable name: 
section: _0_708
field signature: 1067852723
form signature: 17685059741038095652
form signature in host form: 3051392309218509821
alternative form signature: 10099775067853447378
field frame token: E5A146F9EE24C65579076DBEE0AF6904
form renderer id: 0
field renderer id: 712
visible: true
focusable: true
field rank: 4
field rank in signature group: 1
field rank in host form: 3
field rank in host form signature group: 1" autofill-prediction="UNKNOWN_TYPE"></td>
                          <td><span class="text-secondary">001401</span></td>
                          <td><a href="invoice.html" class="text-reset" tabindex="-1">Design Works</a></td>
                          <td>
                            <span class="flag flag-xs flag-country-us me-2"></span>
                            Carlson Limited
                          </td>
                          <td>
                            87956621
                          </td>
                          <td>
                            15 Dec 2017
                          </td>
                          <td>
                            <span class="badge bg-success me-1"></span> Paid
                          </td>
                          <td>$887</td>
                          <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown" aria-expanded="false">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end" style="">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice" autofill-information="overall type: UNKNOWN_TYPE
html type: HTML_TYPE_UNSPECIFIED
server type: NO_SERVER_DATA
heuristic type: UNKNOWN_TYPE
label: Select invoice
parseable name: 
section: _0_708
field signature: 1067852723
form signature: 17685059741038095652
form signature in host form: 3051392309218509821
alternative form signature: 10099775067853447378
field frame token: E5A146F9EE24C65579076DBEE0AF6904
form renderer id: 0
field renderer id: 713
visible: true
focusable: true
field rank: 5
field rank in signature group: 2
field rank in host form: 4
field rank in host form signature group: 2" title="overall type: UNKNOWN_TYPE
html type: HTML_TYPE_UNSPECIFIED
server type: NO_SERVER_DATA
heuristic type: UNKNOWN_TYPE
label: Select invoice
parseable name: 
section: _0_708
field signature: 1067852723
form signature: 17685059741038095652
form signature in host form: 3051392309218509821
alternative form signature: 10099775067853447378
field frame token: E5A146F9EE24C65579076DBEE0AF6904
form renderer id: 0
field renderer id: 713
visible: true
focusable: true
field rank: 5
field rank in signature group: 2
field rank in host form: 4
field rank in host form signature group: 2" autofill-prediction="UNKNOWN_TYPE"></td>
                          <td><span class="text-secondary">001402</span></td>
                          <td><a href="invoice.html" class="text-reset" tabindex="-1">UX Wireframes</a></td>
                          <td>
                            <span class="flag flag-xs flag-country-gb me-2"></span>
                            Adobe
                          </td>
                          <td>
                            87956421
                          </td>
                          <td>
                            12 Apr 2017
                          </td>
                          <td>
                            <span class="badge bg-warning me-1"></span> Pending
                          </td>
                          <td>$1200</td>
                          <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice" autofill-information="overall type: UNKNOWN_TYPE
html type: HTML_TYPE_UNSPECIFIED
server type: NO_SERVER_DATA
heuristic type: UNKNOWN_TYPE
label: Select invoice
parseable name: 
section: _0_708
field signature: 1067852723
form signature: 17685059741038095652
form signature in host form: 3051392309218509821
alternative form signature: 10099775067853447378
field frame token: E5A146F9EE24C65579076DBEE0AF6904
form renderer id: 0
field renderer id: 714
visible: true
focusable: true
field rank: 6
field rank in signature group: 3
field rank in host form: 5
field rank in host form signature group: 3" title="overall type: UNKNOWN_TYPE
html type: HTML_TYPE_UNSPECIFIED
server type: NO_SERVER_DATA
heuristic type: UNKNOWN_TYPE
label: Select invoice
parseable name: 
section: _0_708
field signature: 1067852723
form signature: 17685059741038095652
form signature in host form: 3051392309218509821
alternative form signature: 10099775067853447378
field frame token: E5A146F9EE24C65579076DBEE0AF6904
form renderer id: 0
field renderer id: 714
visible: true
focusable: true
field rank: 6
field rank in signature group: 3
field rank in host form: 5
field rank in host form signature group: 3" autofill-prediction="UNKNOWN_TYPE"></td>
                          <td><span class="text-secondary">001403</span></td>
                          <td><a href="invoice.html" class="text-reset" tabindex="-1">New Dashboard</a></td>
                          <td>
                            <span class="flag flag-xs flag-country-de me-2"></span>
                            Bluewolf
                          </td>
                          <td>
                            87952621
                          </td>
                          <td>
                            23 Oct 2017
                          </td>
                          <td>
                            <span class="badge bg-warning me-1"></span> Pending
                          </td>
                          <td>$534</td>
                          <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice" autofill-information="overall type: UNKNOWN_TYPE
html type: HTML_TYPE_UNSPECIFIED
server type: NO_SERVER_DATA
heuristic type: UNKNOWN_TYPE
label: Select invoice
parseable name: 
section: _0_708
field signature: 1067852723
form signature: 17685059741038095652
form signature in host form: 3051392309218509821
alternative form signature: 10099775067853447378
field frame token: E5A146F9EE24C65579076DBEE0AF6904
form renderer id: 0
field renderer id: 715
visible: true
focusable: true
field rank: 7
field rank in signature group: 4
field rank in host form: 6
field rank in host form signature group: 4" title="overall type: UNKNOWN_TYPE
html type: HTML_TYPE_UNSPECIFIED
server type: NO_SERVER_DATA
heuristic type: UNKNOWN_TYPE
label: Select invoice
parseable name: 
section: _0_708
field signature: 1067852723
form signature: 17685059741038095652
form signature in host form: 3051392309218509821
alternative form signature: 10099775067853447378
field frame token: E5A146F9EE24C65579076DBEE0AF6904
form renderer id: 0
field renderer id: 715
visible: true
focusable: true
field rank: 7
field rank in signature group: 4
field rank in host form: 6
field rank in host form signature group: 4" autofill-prediction="UNKNOWN_TYPE"></td>
                          <td><span class="text-secondary">001404</span></td>
                          <td><a href="invoice.html" class="text-reset" tabindex="-1">Landing Page</a></td>
                          <td>
                            <span class="flag flag-xs flag-country-br me-2"></span>
                            Salesforce
                          </td>
                          <td>
                            87953421
                          </td>
                          <td>
                            2 Sep 2017
                          </td>
                          <td>
                            <span class="badge bg-secondary me-1"></span> Due in 2 Weeks
                          </td>
                          <td>$1500</td>
                          <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice" autofill-information="overall type: UNKNOWN_TYPE
html type: HTML_TYPE_UNSPECIFIED
server type: NO_SERVER_DATA
heuristic type: UNKNOWN_TYPE
label: Select invoice
parseable name: 
section: _0_708
field signature: 1067852723
form signature: 17685059741038095652
form signature in host form: 3051392309218509821
alternative form signature: 10099775067853447378
field frame token: E5A146F9EE24C65579076DBEE0AF6904
form renderer id: 0
field renderer id: 716
visible: true
focusable: true
field rank: 8
field rank in signature group: 5
field rank in host form: 7
field rank in host form signature group: 5" title="overall type: UNKNOWN_TYPE
html type: HTML_TYPE_UNSPECIFIED
server type: NO_SERVER_DATA
heuristic type: UNKNOWN_TYPE
label: Select invoice
parseable name: 
section: _0_708
field signature: 1067852723
form signature: 17685059741038095652
form signature in host form: 3051392309218509821
alternative form signature: 10099775067853447378
field frame token: E5A146F9EE24C65579076DBEE0AF6904
form renderer id: 0
field renderer id: 716
visible: true
focusable: true
field rank: 8
field rank in signature group: 5
field rank in host form: 7
field rank in host form signature group: 5" autofill-prediction="UNKNOWN_TYPE"></td>
                          <td><span class="text-secondary">001405</span></td>
                          <td><a href="invoice.html" class="text-reset" tabindex="-1">Marketing Templates</a></td>
                          <td>
                            <span class="flag flag-xs flag-country-pl me-2"></span>
                            Printic
                          </td>
                          <td>
                            87956621
                          </td>
                          <td>
                            29 Jan 2018
                          </td>
                          <td>
                            <span class="badge bg-danger me-1"></span> Paid Today
                          </td>
                          <td>$648</td>
                          <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice" autofill-information="overall type: UNKNOWN_TYPE
html type: HTML_TYPE_UNSPECIFIED
server type: NO_SERVER_DATA
heuristic type: UNKNOWN_TYPE
label: Select invoice
parseable name: 
section: _0_708
field signature: 1067852723
form signature: 17685059741038095652
form signature in host form: 3051392309218509821
alternative form signature: 10099775067853447378
field frame token: E5A146F9EE24C65579076DBEE0AF6904
form renderer id: 0
field renderer id: 717
visible: true
focusable: true
field rank: 9
field rank in signature group: 6
field rank in host form: 8
field rank in host form signature group: 6" title="overall type: UNKNOWN_TYPE
html type: HTML_TYPE_UNSPECIFIED
server type: NO_SERVER_DATA
heuristic type: UNKNOWN_TYPE
label: Select invoice
parseable name: 
section: _0_708
field signature: 1067852723
form signature: 17685059741038095652
form signature in host form: 3051392309218509821
alternative form signature: 10099775067853447378
field frame token: E5A146F9EE24C65579076DBEE0AF6904
form renderer id: 0
field renderer id: 717
visible: true
focusable: true
field rank: 9
field rank in signature group: 6
field rank in host form: 8
field rank in host form signature group: 6" autofill-prediction="UNKNOWN_TYPE"></td>
                          <td><span class="text-secondary">001406</span></td>
                          <td><a href="invoice.html" class="text-reset" tabindex="-1">Sales Presentation</a></td>
                          <td>
                            <span class="flag flag-xs flag-country-br me-2"></span>
                            Tabdaq
                          </td>
                          <td>
                            87956621
                          </td>
                          <td>
                            4 Feb 2018
                          </td>
                          <td>
                            <span class="badge bg-secondary me-1"></span> Due in 3 Weeks
                          </td>
                          <td>$300</td>
                          <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice" autofill-information="overall type: UNKNOWN_TYPE
html type: HTML_TYPE_UNSPECIFIED
server type: NO_SERVER_DATA
heuristic type: UNKNOWN_TYPE
label: Select invoice
parseable name: 
section: _0_708
field signature: 1067852723
form signature: 17685059741038095652
form signature in host form: 3051392309218509821
alternative form signature: 10099775067853447378
field frame token: E5A146F9EE24C65579076DBEE0AF6904
form renderer id: 0
field renderer id: 718
visible: true
focusable: true
field rank: 10
field rank in signature group: 7
field rank in host form: 9
field rank in host form signature group: 7" title="overall type: UNKNOWN_TYPE
html type: HTML_TYPE_UNSPECIFIED
server type: NO_SERVER_DATA
heuristic type: UNKNOWN_TYPE
label: Select invoice
parseable name: 
section: _0_708
field signature: 1067852723
form signature: 17685059741038095652
form signature in host form: 3051392309218509821
alternative form signature: 10099775067853447378
field frame token: E5A146F9EE24C65579076DBEE0AF6904
form renderer id: 0
field renderer id: 718
visible: true
focusable: true
field rank: 10
field rank in signature group: 7
field rank in host form: 9
field rank in host form signature group: 7" autofill-prediction="UNKNOWN_TYPE"></td>
                          <td><span class="text-secondary">001407</span></td>
                          <td><a href="invoice.html" class="text-reset" tabindex="-1">Logo &amp; Print</a></td>
                          <td>
                            <span class="flag flag-xs flag-country-us me-2"></span>
                            Apple
                          </td>
                          <td>
                            87956621
                          </td>
                          <td>
                            22 Mar 2018
                          </td>
                          <td>
                            <span class="badge bg-success me-1"></span> Paid Today
                          </td>
                          <td>$2500</td>
                          <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice" autofill-information="overall type: UNKNOWN_TYPE
html type: HTML_TYPE_UNSPECIFIED
server type: NO_SERVER_DATA
heuristic type: UNKNOWN_TYPE
label: Select invoice
parseable name: 
section: _0_708
field signature: 1067852723
form signature: 17685059741038095652
form signature in host form: 3051392309218509821
alternative form signature: 10099775067853447378
field frame token: E5A146F9EE24C65579076DBEE0AF6904
form renderer id: 0
field renderer id: 719
visible: true
focusable: true
field rank: 11
field rank in signature group: 8
field rank in host form: 10
field rank in host form signature group: 8" title="overall type: UNKNOWN_TYPE
html type: HTML_TYPE_UNSPECIFIED
server type: NO_SERVER_DATA
heuristic type: UNKNOWN_TYPE
label: Select invoice
parseable name: 
section: _0_708
field signature: 1067852723
form signature: 17685059741038095652
form signature in host form: 3051392309218509821
alternative form signature: 10099775067853447378
field frame token: E5A146F9EE24C65579076DBEE0AF6904
form renderer id: 0
field renderer id: 719
visible: true
focusable: true
field rank: 11
field rank in signature group: 8
field rank in host form: 10
field rank in host form signature group: 8" autofill-prediction="UNKNOWN_TYPE"></td>
                          <td><span class="text-secondary">001408</span></td>
                          <td><a href="invoice.html" class="text-reset" tabindex="-1">Icons</a></td>
                          <td>
                            <span class="flag flag-xs flag-country-pl me-2"></span>
                            Tookapic
                          </td>
                          <td>
                            87956621
                          </td>
                          <td>
                            13 May 2018
                          </td>
                          <td>
                            <span class="badge bg-success me-1"></span> Paid Today
                          </td>
                          <td>$940</td>
                          <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="card-footer d-flex align-items-center">
                    <p class="m-0 text-secondary">Showing <span>1</span> to <span>8</span> of <span>16</span> entries</p>
                    <ul class="pagination m-0 ms-auto">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                          <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M15 6l-6 6l6 6"></path></svg>
                          prev
                        </a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item active"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">4</a></li>
                      <li class="page-item"><a class="page-link" href="#">5</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">
                          next <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 6l6 6l-6 6"></path></svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
    @foreach ($karyawan as $karyawan)
        <li>{{ $karyawan->nama }}</li>
    @endforeach
@endsection
