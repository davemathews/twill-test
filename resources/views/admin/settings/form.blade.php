@extends('twill::layouts.settings')

{{-- the "'translated' => true" attrib is required or else the settings page won't work currently (see https://github.com/area17/twill/issues/50) --}}

@section('contentFields')
    @formField('input', [
        'translated' => true,
        'label' => 'Company Name',
        'name' => 'company_name',
        'textLimit' => '80'
    ])

    @formField('input', [
        'translated' => true,
        'label' => 'Site Title',
        'name' => 'site_title',
        'textLimit' => '80'
    ])

    @formField('input', [
        'translated' => true,
        'label' => 'Email Address',
        'name' => 'email_address',
        'textLimit' => '80'
    ])
@stop