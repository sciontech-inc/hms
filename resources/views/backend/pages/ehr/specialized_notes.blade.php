@extends('backend.master.index')

@section('title', 'SPECIALIZED NOTES')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.0.13/css/froala_editor.pkgd.min.css">
<style>
    .sc-modal-dialog {
        max-width: 980px !important;
        background: #fff;
        top: 20px;
        position: relative;
        margin: auto;
        border-radius: 9px;
    }
</style>
@endsection
@section('breadcrumbs')
    <span>EHR</span> / <span class="highlight">SPECIALIZED NOTES</span>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">SPECIALIZED NOTES: CREATE A NOTE</h5>
            </div>
            @include('backend.partial.flash-message')
            <div class="col-12">
                <div class="card-body">
                    <table id="specialized_notes_table" class="table table-striped" style="width:100%"> </table>
                </div>
            </div>
        </div>
    </div>
</div>

@section('sc-modal')
@parent
<div class="sc-modal-content" id="specialized_notes_form">
    <div class="sc-modal-dialog">
        <div class="sc-modal-header">
            <span class="sc-title-bar"></span>
            <span class="sc-close" onclick="scion.create.sc_modal('specialized_notes_form').hide('all', modalHideFunction)"><i class="fas fa-times"></i></span>
        </div>
        <div class="sc-modal-body">
            <form method="post" id="specializedNotesForm" class="form-record">
                <div class="row">
                    <div class="form-group col-md-12 patient_name">
                        <label>PATIENT NAME</label>
                        <input type="text" class="form-control" id="patient_name" name="patient_name" placeholder="PATIENT NAME"/>
                    </div>
                    <div class="form-group col-md-12 date">
                        <label>DATE</label>
                        <input type="date" class="form-control" id="date" name="date"/>
                    </div>
                    <div class="form-group col-md-12 note_title">
                        <label>NOTE TITLE</label>
                        <input type="text" class="form-control" id="note_title" name="note_title" placeholder="NOTE TITLE"/>
                    </div>
                    <div class="form-group col-md-12 note_type">
                        <label>NOTE TYPE</label>
                        <select class="form-control" name="note_type" id="note_type">
                            <option value="ONE TIME NOTE">ONE TIME NOTE</option>
                            <option value="RECURRING NOTE">RECURRING NOTE</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12 note_group">
                        <label>NOTE GROUP</label>
                        <input type="text" class="form-control" id="note_group" name="note_group" placeholder="NOTE GROUP"/>
                    </div>
                    <div class="form-group col-md-12 note_description">
                        <label>NOTE DESCRIPTION</label>
                        <textarea name="note_description" id="note_description" rows="3" placeholder="description"></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@endsection

@section('scripts')
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="/js/backend/pages/hms/ehr/specialized_notes.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.0.13/js/froala_editor.pkgd.min.js"></script>
    <script>
        //  $(document).ready(function() {
        //     var editor = new FroalaEditor('#note_description');
        // });
       
        $(function() {
            new FroalaEditor('#note_description', {
            events: {
                'contentChanged': function () {
                    $('#note_description').text(this.html.get());
                }
            }
            });
        });
    </script>
@endsection