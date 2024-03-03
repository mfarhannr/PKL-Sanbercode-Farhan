@extends('layouts.app')

@section('content')
        {{-- <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="font-weight-bolder mb-0">Tambah Akun</h5>
                        <div class="row">
                            <div class="col-md-12 mt-2">
                                <form action="/admin-management" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mt-3">

                                        <div class="form-group col-12 col-sm-6">
                                            <label for="example-text-input" class="form-control-label">Nama</label>
                                            <input class="form-control" type="text" name="name"
                                                onfocus="focused(this)" onfocusout="defocused(this)">
                                            @error('username')
                                                <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group col-12 col-sm-6 mt-3 mt-sm-0">
                                            <label for="example-text-input" class="form-control-label">Email</label>
                                            <input class="form-control" type="email" name="email"
                                                onfocus="focused(this)" onfocusout="defocused(this)">
                                            @error('email')
                                                <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="form-group col-12 col-sm-6">
                                            <label for="example-text-input" class="form-control-label">Password</label>
                                            <input class="form-control" type="password" name="password"
                                                onfocus="focused(this)" onfocusout="defocused(this)">
                                            @error('password')
                                                <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group col-12 col-sm-6 mt-3 mt-sm-0">
                                            <label for="example-text-input" class="form-control-label">Role</label>
                                            <select class="form-control" name="role" id="choices-button"
                                                placeholder="Departure">
                                                <option value="admin">admin</option>
                                                <option value="siswa">siswa</option>
                                            </select>
                                            @error('role')
                                                <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                            @enderror
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-dark btn-sm ms-auto mt-4hh">Create</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
<fieldset class="form-fieldset">
                            <div class="mb-3">
                              <label class="form-label required">Full name</label>
                              <input type="text" class="form-control" autocomplete="off" autofill-information="overall type: NAME_FULL
html type: HTML_TYPE_UNSPECIFIED
server type: SERVER_RESPONSE_PENDING
heuristic type: NAME_FULL
label: Full name
parseable name: 
section: _0_1297
field signature: 1318412689
form signature: 9027026662048918890
form signature in host form: 5073101916939189548
alternative form signature: 13873576269028209477
field frame token: F5A54C7C3FBE118A5CBB455034A97357
form renderer id: 1278
field renderer id: 1315
visible: true
focusable: true
field rank: 102
field rank in signature group: 33
field rank in host form: 73
field rank in host form signature group: 23
autocomplete: off" title="overall type: NAME_FULL
html type: HTML_TYPE_UNSPECIFIED
server type: SERVER_RESPONSE_PENDING
heuristic type: NAME_FULL
label: Full name
parseable name: 
section: _0_1297
field signature: 1318412689
form signature: 9027026662048918890
form signature in host form: 5073101916939189548
alternative form signature: 13873576269028209477
field frame token: F5A54C7C3FBE118A5CBB455034A97357
form renderer id: 1278
field renderer id: 1315
visible: true
focusable: true
field rank: 102
field rank in signature group: 33
field rank in host form: 73
field rank in host form signature group: 23
autocomplete: off" autofill-prediction="NAME_FULL">
                            </div>
                            <div class="mb-3">
                              <label class="form-label required">Company</label>
                              <input type="text" class="form-control" autocomplete="off" autofill-information="overall type: COMPANY_NAME
html type: HTML_TYPE_UNSPECIFIED
server type: SERVER_RESPONSE_PENDING
heuristic type: COMPANY_NAME
label: Company
parseable name: 
section: _0_1297
field signature: 1318412689
form signature: 9027026662048918890
form signature in host form: 5073101916939189548
alternative form signature: 13873576269028209477
field frame token: F5A54C7C3FBE118A5CBB455034A97357
form renderer id: 1278
field renderer id: 1316
visible: true
focusable: true
field rank: 103
field rank in signature group: 34
field rank in host form: 74
field rank in host form signature group: 24
autocomplete: off" title="overall type: COMPANY_NAME
html type: HTML_TYPE_UNSPECIFIED
server type: SERVER_RESPONSE_PENDING
heuristic type: COMPANY_NAME
label: Company
parseable name: 
section: _0_1297
field signature: 1318412689
form signature: 9027026662048918890
form signature in host form: 5073101916939189548
alternative form signature: 13873576269028209477
field frame token: F5A54C7C3FBE118A5CBB455034A97357
form renderer id: 1278
field renderer id: 1316
visible: true
focusable: true
field rank: 103
field rank in signature group: 34
field rank in host form: 74
field rank in host form signature group: 24
autocomplete: off" autofill-prediction="COMPANY_NAME">
                            </div>
                            <div class="mb-3">
                              <label class="form-label required">Email</label>
                              <input type="email" class="form-control" autocomplete="off" autofill-information="overall type: EMAIL_ADDRESS
html type: HTML_TYPE_UNSPECIFIED
server type: SERVER_RESPONSE_PENDING
heuristic type: EMAIL_ADDRESS
label: Email
parseable name: 
section: _0_1317
field signature: 2964261712
form signature: 9027026662048918890
form signature in host form: 5073101916939189548
alternative form signature: 13873576269028209477
field frame token: F5A54C7C3FBE118A5CBB455034A97357
form renderer id: 1278
field renderer id: 1317
visible: true
focusable: true
field rank: 104
field rank in signature group: 0
field rank in host form: 75
field rank in host form signature group: 0
autocomplete: off" title="overall type: EMAIL_ADDRESS
html type: HTML_TYPE_UNSPECIFIED
server type: SERVER_RESPONSE_PENDING
heuristic type: EMAIL_ADDRESS
label: Email
parseable name: 
section: _0_1317
field signature: 2964261712
form signature: 9027026662048918890
form signature in host form: 5073101916939189548
alternative form signature: 13873576269028209477
field frame token: F5A54C7C3FBE118A5CBB455034A97357
form renderer id: 1278
field renderer id: 1317
visible: true
focusable: true
field rank: 104
field rank in signature group: 0
field rank in host form: 75
field rank in host form signature group: 0
autocomplete: off" autofill-prediction="EMAIL_ADDRESS">
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Phone number</label>
                              <input type="tel" class="form-control" autocomplete="off" autofill-information="overall type: PHONE_HOME_WHOLE_NUMBER
html type: HTML_TYPE_UNSPECIFIED
server type: SERVER_RESPONSE_PENDING
heuristic type: PHONE_HOME_WHOLE_NUMBER
label: Phone number
parseable name: 
section: _0_1317
field signature: 50101327
form signature: 9027026662048918890
form signature in host form: 5073101916939189548
alternative form signature: 13873576269028209477
field frame token: F5A54C7C3FBE118A5CBB455034A97357
form renderer id: 1278
field renderer id: 1318
visible: true
focusable: true
field rank: 105
field rank in signature group: 0
field rank in host form: 76
field rank in host form signature group: 0
autocomplete: off" title="overall type: PHONE_HOME_WHOLE_NUMBER
html type: HTML_TYPE_UNSPECIFIED
server type: SERVER_RESPONSE_PENDING
heuristic type: PHONE_HOME_WHOLE_NUMBER
label: Phone number
parseable name: 
section: _0_1317
field signature: 50101327
form signature: 9027026662048918890
form signature in host form: 5073101916939189548
alternative form signature: 13873576269028209477
field frame token: F5A54C7C3FBE118A5CBB455034A97357
form renderer id: 1278
field renderer id: 1318
visible: true
focusable: true
field rank: 105
field rank in signature group: 0
field rank in host form: 76
field rank in host form signature group: 0
autocomplete: off" autofill-prediction="PHONE_HOME_WHOLE_NUMBER">
                            </div>
                            <label class="form-check">
                              <input type="checkbox" class="form-check-input" autofill-information="overall type: UNKNOWN_TYPE
html type: HTML_TYPE_UNSPECIFIED
server type: SERVER_RESPONSE_PENDING
heuristic type: UNKNOWN_TYPE
label: I agree to the Terms &amp; Conditions
parseable name: 
section: _0_1317
field signature: 1067852723
form signature: 9027026662048918890
form signature in host form: 5073101916939189548
alternative form signature: 13873576269028209477
field frame token: F5A54C7C3FBE118A5CBB455034A97357
form renderer id: 1278
field renderer id: 1191
visible: true
focusable: true
field rank: 106
field rank in signature group: 1
field rank in host form: 77
field rank in host form signature group: 1" title="overall type: UNKNOWN_TYPE
html type: HTML_TYPE_UNSPECIFIED
server type: SERVER_RESPONSE_PENDING
heuristic type: UNKNOWN_TYPE
label: I agree to the Terms &amp; Conditions
parseable name: 
section: _0_1317
field signature: 1067852723
form signature: 9027026662048918890
form signature in host form: 5073101916939189548
alternative form signature: 13873576269028209477
field frame token: F5A54C7C3FBE118A5CBB455034A97357
form renderer id: 1278
field renderer id: 1191
visible: true
focusable: true
field rank: 106
field rank in signature group: 1
field rank in host form: 77
field rank in host form signature group: 1" autofill-prediction="UNKNOWN_TYPE">
                              <span class="form-check-label required">I agree to the Terms &amp; Conditions</span>
                            </label>
                          </fieldset>
@endsection