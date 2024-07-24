<!DOCTYPE html>
<html>
@php
    $pv_invert = json_decode($data['pv_inverts']);
    $design_install = json_decode($data['design_and_installation']);
    $test_report = json_decode($data['test_report_grid']);
@endphp
<head>
    <title>Solar PV Grant Inspection and Testing Report</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {}

        h1,
        h2 {
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="wrapper" style="width:675px; margin:0 auto;">

        <table>
            <tr>
                <td style="text-align: right; ">
                    <img src="{{ config('envoirment.SITE_LOGO')}}" alt="" style="width:250px">
                </td>
            </tr>
            <tr>
                <th>
                    <h2 style="text-align: left;"><u>Part 2 – Inspection, Test and Commissioning Report</u></h2>
                </th>
            </tr>
            <tr>
                <th style="padding-top:0; padding-bottom:0">Test Report for grid-connected photovoltaic systems</th>
            </tr>
            <tr>
                <td style="padding-top:0">according to EN 62446, Annex A</td>
            </tr>
        </table>
        <table style="border: none !important;">

            <tr>
                <th colspan="2">Customer:</th>
            </tr>
            <tr>
                <td>Customer Name:</td>
                <td style="border-bottom: 1px solid; width:100% ">{{ $data['customer_name'] ?? '' }}</td>
            </tr>
            <tr>
                <td style="white-space: nowrap;">Customer Address:</td>
                <td style="border-bottom: 1px solid; width:100%">{{ $data['customer_address'] ?? '' }}</td>
            </tr>
            <tr>
                <td>Customer Eircode:</td>
                <td style="border-bottom: 1px solid; width:100%">{{ $data['customer_eircode'] ?? '' }}</td>
            </tr>
        </table>
        <table>
            <tr>
                <th colspan="2" style="margin-top: 20px;"> Installation Contractor: </th>
            </tr>
            <tr>
                <td>Company Name:</td>
                <td style="border-bottom: 1px solid; width:100% ">{{ $data['installer_company_name'] ?? '' }}</td>
            </tr>
            <tr>
                <td style="white-space: nowrap;">Company Representative:</td>
                <td style="border-bottom: 1px solid; width:100%">{{ $data['installer_company_representative'] ?? '' }}</td>
            </tr>
            <tr>
                <td>Company Address:</td>
                <td style="border-bottom: 1px solid; width:100%">{{ $data['installer_company_address'] ?? '' }}</td>
            </tr>
        </table>

        <table>
            <tr>
                <th colspan="2">PB System Description</th>
            </tr>
            <tr>
                <th colspan="2">PV Module:</th>
            </tr>
            <tr>
                <td>Manufacturer:</td>
                <td> {{ $data['pv_manufacturer'] ?? '' }}</td>
                <td>Module Type:</td>
                <td> {{ $data['pv_model_type'] ?? '' }}</td>
            </tr>
            <tr>
                <td>PV Module Performance:</td>
                <td> {{ $data['pv_model_performance'] ?? '' }}</td>
                <td>Number of Modules:</td>
                <td> {{ $data['pv_number_modules'] ?? '' }}</td>
            </tr>
            <tr>
                <td>Short Circuit Current Isc (A):</td>
                <td> {{ $data['pv_short_circuit_current'] ?? '' }}</td>
                <td>MPP Current (A):</td>
                <td> {{ $data['pv_mpp_current'] ?? '' }}</td>
            </tr>
            <tr>
                <td>Open Circuit Voltage Voc (V):</td>
                <td> {{ $data['pv_open_circuit_voltage'] ?? '' }}</td>
                <td>MPP Voltage (V):</td>
                <td> {{ $data['pv_mpp_voltage'] ?? '' }}</td>
            </tr>
        </table>

        <table>
            <tr>
                <th colspan="4">PV Inverters:</th>
            </tr>
            <tr>
                <td>Manufacturer:</td>
                <td> {{ $pv_invert->inverter_manufacturer ?? ''}}</td>
                <td>Inverter Type: </td>
                <td> {{ $pv_invert->inverter_type ?? ''}}</td>
            </tr>
            <tr>
                <td>AC Nominal Power (W):</td>
                <td> {{ $pv_invert->inverter_ac_nominal ?? ''}}</td>
                <td>Inverter Quantity:</td>
                <td> {{ $pv_invert->pv_inverter_quantity ?? ''}}</td>
            </tr>
            <tr>
                <td>AC Maximum Power (W):</td>
                <td> {{ $pv_invert->inverter_ac_maximum ?? ''}}</td>
                <td> DC Maximum Power (W):</td>
                <td> {{ $pv_invert->inverter_dc_maximum ?? ''}}</td>
            </tr>
            @if($data['client_type']=='2')
            <tr>
                <th colspan="4">Inverter Type 2: (if applicable)</th>
            </tr>
            <tr>
                <td>Manufacturer:</td>
                <td>{{ $pv_invert->inverter_manufacturer_2 ?? ''}}</td>
                <td>Inverter Type: </td>
                <td>{{ $pv_invert->inverter_type_2 }}</td>
            </tr>
            <tr>
                <td>AC Nominal Power (W):</td>
                <td>{{ $pv_invert->inverter_ac_nominal_2 ?? ''}}</td>
                <td>Inverter Quantity:</td>
                <td>{{ $pv_invert->pv_inverter_quantity_2 }}</td>
            </tr>
            <tr>
                <td>AC Maximum Power (W):</td>
                <td>{{ $pv_invert->inverter_ac_maximum2 ?? ''}}</td>
                <td> DC Maximum Power (W):</td>
                <td>{{ $pv_invert->inverter_dc_maximum2 }}</td>
            </tr>
            <tr>
                <th colspan="4">Inverter Type 3: (if applicable)
                </th>
            </tr>
            <tr>
                <td>Manufacturer:</td>
                <td>{{ $pv_invert->inverter_manufacturer_3 ?? ''}}</td>
                <td>Inverter Type: </td>
                <td>{{ $pv_invert->inverter_type_3 ?? ''}}</td>
            </tr>
            <tr>
                <td>AC Nominal Power (W):</td>
                <td>{{ $pv_invert->inverter_ac_nominal_3 ?? ''}}</td>
                <td>Inverter Quantity:</td>
                <td>{{ $pv_invert->pv_inverter_quantity_3 ?? '' }}</td>
            </tr>
            <tr>
                <td>AC Maximum Power (W):</td>
                <td>{{ $pv_invert->inverter_ac_maximum3 ?? ''}}</td>
                <td> DC Maximum Power (W):</td>
                <td>{{ $pv_invert->inverter_dc_maximum3 ?? ''}}</td>
            </tr>
            @endif
        </table>

        <table>
            <tr>
                <td style="vertical-align: top;">Test Date: {{ $pv_invert->inverter_test_date ?? ''}}</td>
                <td rowspan="1">Test Reason:</td>
                <td><input type="checkbox" name="" id="" @checked($pv_invert->inverter_test_reason ?? false)> Initial inspection</td>

            </tr>
            <tr>
                <td></td>
                <td rowspan="1"></td>
                <td><input type="checkbox" name="" @checked($pv_invert->inverter_test2_reason ?? false) id="" style="border-radius: 0;"> Retesting</td>
            </tr>
            <tr>
                <td>Next Test Date: {{ $pv_invert->inverter_next_test_date ?? ''}}</td>
            </tr>
        </table>

        <table>
            <tr>
                <th colspan="2">Electrical Certs</th>
            </tr>
            <tr>
                <td>Safe Electric Cert Number:</td>
                <td>{{ $data['electric_cert_number'] ?? '' }}</td>
                <td>Test Record Sheet Cert Number:</td>
                <td> {{ $data['electric_record_sheet'] ?? '' }}</td>
            </tr>
            <tr>
                <td colspan="2">DC Test Results</td>
            </tr>
            <tr>
                <td>RE: {{ $data['electric_re'] ?? '' }}</td>
                <td>Loop: {{ $data['electric_loop'] ?? '' }}</td>
                <td>RCDx1: {{ $data['electric_rcdx1'] ?? '' }}</td>
                <td>RCDx5: {{ $data['electric_rcdx5'] ?? '' }}</td>

            </tr>
        </table>

        <table>
            <tr>
                <th colspan="2">Design, construction, inspection and testing</th>
            </tr>
            <tr>
                <td colspan="2">
                    I/we, the responsible person(s) for the design, construction, inspection and testing of the
                    electrical
                    system (as specified by the signature(s)), details of which are described above, have inspected and
                    tested the design and structure with suitable skill and care and confirm that the said words, for
                    which
                    I/we am/are responsible, were carried out to the best of our knowledge and expertise.
                </td>
            </tr>
        </table>

        <table>
            <tr>
                <th colspan="2">Test Result:</th>
            </tr>
            <tr>
                <td> <input type="checkbox" name="" id="" @checked($data['test_result'] ?? false)> <span style="padding-left: 10pt; font-size:17px">No defects
                        were found</span> </td>
                <td> <input type="checkbox" name="" id="" @checked($data['test_result2'] ?? false)> <span style="padding-left: 10pt; font-size:17px">Defects were
                        found</span> </td>
            </tr>
            <tr>
                <td colspan="2"> <input type="checkbox" name="" id="" @checked($data['test_result3'] ?? false)> <span
                        style="padding-left: 10pt; font-size:16px">The Photovoltaic system complies with the standards
                        of electrical engineering</span> </td>
                <!-- <td></td> -->
            </tr>
            <tr>
                <td>Date:</td>
                <td>{{ $data['test_result_date'] ?? '' }}</td>
            </tr>
            <tr>
                <td>Signature/Tester:</td>
                <td style="" colspan="10">
                    @if(isset($data['tester_signature']) && strpos($data['tester_signature'], 'base_document') !== false)
                    <img src="{{ config('envoirment.IMAGE_API_PATH') . $data['tester_signature'] }}" alt="">

                    @else
                    <p style="text-indent: 0pt;text-align: left; font-size:16px; padding-bottom:2pt; margin:0">
                        <br />{{ $data['tester_signature'] ?? ''}}
                    </p>
                    @endif
                </td>
            </tr>
        </table>

        <table>
            <tr>
                <th colspan="2" style="padding-left: 0;">Remarks:</th>
            </tr>
            <tr>
                <td style="border-bottom: 1px solid; width: 100%">{{ $data['test_remark'] ?? ''}}</td>
            </tr>
            {{-- <tr>
                <td style="border-bottom: 1px solid; width: 80%"></td>
            </tr>
            <tr>
                <td style="border-bottom: 1px solid; width: 100%"></td>
            </tr> --}}
        </table>
        <table>
            <tr>
                <th style="padding:0">Inspection test report</th>
            </tr>
            <tr>
                <td style="padding:0">according to EN 62446, Annex B</td>
            </tr>
        </table>

        <table>
            <tr>
                <th colspan="2">Testing:</th>
            </tr>
            <tr>
                <td colspan="2">Test Date: {{ $data['test_date'] ?? ''}}</td>
            </tr>
            <tr>
                <td style="width: 428px;">Signature/Tester:</td>
                <td colspan="2">
                    <td style="" colspan="10">
                        @if(isset($data['test_signature']) && strpos($data['test_signature'], 'base_document') !== false)
                        <img src="{{ config('envoirment.IMAGE_API_PATH') . $data['test_signature'] }}" alt="">
                        @else
                        <p style="text-indent: 0pt;text-align: left; font-size:16px; margin:0; padding-bottom:2pt">
                            <br /> {{ $data['test_signature'] ?? ''}}
                        </p>
                        @endif
                    </td>
                </td>
            </tr>
            <tr>
                <td colspan="2">Inspected circuits (fill out one sheet for large systems and for separate inspections
                    per inspection):</td>
            </tr>
        </table>

        <table>
            <tr>
                <th colspan="2">Design and installation of the PV generator</th>
            </tr>
            <tr>
                <td><input type="checkbox" @checked($design_install->design_installation_1 ?? false)> The DC system was generally designed, selected and set up in
                    accordance with the requirements in DIN
                    VDE 0100 (IEC 60364) and in particular in accordance with DIN VDE 0100-712 (IEC 60364-7-712)</td>
                <td></td>
            </tr>
            <tr>
                <td><input type="checkbox" @checked($design_install->design_installation_2 ?? false)> The DC components were measured for DC operation</td>
                <td></td>
            </tr>
            <tr>
                <td><input type="checkbox" @checked($design_install->design_installation_3 ?? false)> The DC components are rated for the maximum current and
                    maximum voltage</td>
                <td></td>
            </tr>
            <tr>
                <td><input type="checkbox" @checked($design_install->design_installation_4 ?? false)> Protection is provided by application of class II or
                    equivalent insulation on the DC side</td>
                <td></td>
            </tr>
            <tr>
                <td><input type="checkbox" @checked($design_install->design_installation_5 ?? false)> PV strand cables, PV generator cables and PV DC main cables
                    have been selected and constructed so
                    that the risk of earth faults and short circuits is reduced to a minimum (DIN VDE 0100-712 para.
                    522.8.1)</td>
                <td></td>
            </tr>
            <tr>
                <td><input type="checkbox" @checked($design_install->design_installation_6 ?? false)> The wiring system has been selected and constructed so that it
                    can withstand expected external
                    influences such as wind, ice temperature and solar radiation (DIN VDE 0100-712. 522.8.3)</td>
                <td></td>
            </tr>
            <tr>
                <td><input type="checkbox" @checked($design_install->design_installation_7 ?? false)> AC and DC cables are physically separated</td>
                <td></td>
            </tr>
            <tr>
                <td><input type="checkbox" @checked($design_install->design_installation_8 ?? false)> Systems without strand overcurrent protective device: Strand
                    cables are designed so that they can
                    take up the highest combined leakage current of parallel lines (DIN VDE 0100-712 para.433)</td>
                <td></td>
            </tr>
            <tr>
                <td><input type="checkbox" @checked($design_install->design_installation_9 ?? false)> Systems with strand overcurrent protective device: Overcurrent
                    protective devices are set correctly
                    according to local rules or according to the PV module manufacturer’s instruction (DIN VDE 0100-712
                    para. 433.2)</td>
                <td></td>
            </tr>
            <tr>
                <td><input type="checkbox" @checked($design_install->design_installation_10 ?? false)> There are DC load break switches installed on the DC side of
                    the inverter (DIN VDE 0100-712 para.
                    536.2.2)</td>
                <td></td>
            </tr>

            <tr>
                <th colspan="2">PV System/overvoltage protection/electric shock</th>
            </tr>
            <tr>
                <td><input type="checkbox" @checked($design_install->overvoltage_1 ?? false)> The inverter has a simple separation between the AC side and
                    the DC side</td>
                <td></td>
            </tr>
            <tr>
                <td><input type="checkbox" @checked($design_install->overvoltage_2 ?? false)> Alternatively: A residual device is installed in the circuit
                    and corresponds to a type B RCD (DIN
                    VDE 0100-712 para. 413.1.1.1.2)</td>
                <td></td>
            </tr>
            <tr>
                <td><input type="checkbox" @checked($design_install->overvoltage_3 ?? false)> The area of wiring loops was kept as small as possible (DIN
                    VDE 0100-712, para. 54)</td>
                <td></td>
            </tr>
            <tr>
                <td><input type="checkbox" @checked($design_install->overvoltage_4 ?? false)> If equipotential bonding conductors are installed, they run in
                    parallel and in as close contact as
                    possible to the PV DC cables</td>
                <td></td>
            </tr>
            <tr>
                <th colspan="2">Special factors of PV system – AC circuit</th>
            </tr>
            <tr>
                <td><input type="checkbox" @checked($design_install->special_factor_1 ?? false)> Devices for disconnecting the inverter are provided on the AC
                    side</td>
                <td></td>
            </tr>
            <tr>
                <td><input type="checkbox" @checked($design_install->special_factor_2 ?? false)> Separating and switching devices are connected so that the PV
                    installation is connected on the
                    “load” side and the public supply on the “source” side (DIN VDE 0100-712 par. 536.2.2.1)</td>
                <td></td>
            </tr>
            <tr>
                <td><input type="checkbox" @checked($design_install->special_factor_3 ?? false)> Protection settings of the inverter are programmed according
                    to local regulations</td>
                <td></td>
            </tr>
            <tr>
                <th colspan="2">Marking and labelling of the PV system</th>
            </tr>
            <tr>
                <td><input type="checkbox" @checked($design_install->marking_labelling_1 ?? false)> All circuits, protection devices, switches and terminals have
                    appropriate markings</td>
                <td></td>
            </tr>
            <tr>
                <td><input type="checkbox" @checked($design_install->marking_labelling_2 ?? false)> All DC connection boxes (PV sub-generator connection box and
                    PV generator connection box) bear a
                    warning that the active parts present in the connection box are supplied by a PV generator and may
                    still be live after the shutdown of PV inverters and public supply</td>
                <td></td>
            </tr>
            <tr>
                <td><input type="checkbox" @checked($design_install->marking_labelling_3 ?? false)> The AC main switch has a clear inscription</td>
                <td></td>
            </tr>
            <tr>
                <td><input type="checkbox" @checked($design_install->marking_labelling_4 ?? false)> Warnings are present for the double supply at the point of
                    interconnection</td>
                <td></td>
            </tr>
            <tr>
                <td><input type="checkbox" @checked($design_install->marking_labelling_5 ?? false)> The protection settings of the inverter and details of the
                    installation are provided on site</td>
                <td></td>
            </tr>
            <tr>
                <td><input type="checkbox" @checked($design_install->marking_labelling_6 ?? false)> The procedures for emergency shutdown are provided on site
                </td>
                <td></td>
            </tr>
            <tr>
                <td><input type="checkbox" @checked($design_install->marking_labelling_7 ?? false)> All signs and markings are suitable and permanently attached
                </td>
                <td></td>
            </tr>
            <tr>
                <th colspan="2">General (mechanical) installation of the PV system</th>
            </tr>
            <tr>
                <td><input type="checkbox" @checked($design_install->general_installation_1 ?? false)> Ventilation is provided behind the PV generator to prevent
                    overheating/reduce the fire risk</td>
                <td></td>
            </tr>
            <tr>
                <td><input type="checkbox" @checked($design_install->general_installation_2 ?? false)> The frame and materials are properly attached and stable; the
                    roof fasteners are weather-resistant
                </td>
                <td></td>
            </tr>
            <tr>
                <td><input type="checkbox" @checked($design_install->general_installation_3 ?? false)> The cable routing is weather-resistant</td>
                <td></td>
            </tr>
        </table>

        <h2>Notes:</h2>
        <p style="border-bottom: 1px solid; width: 100%">{{ $data['test_notes'] ?? '' }}</p>
        {{-- <p style="border-bottom: 1px solid; width: 80%"></p>
        <p style="border-bottom: 1px solid; width: 100%"></p> --}}

        <table>
            <tr>
                <th style="padding:0">Test Report for grid-connected photovoltaic systems</th>
            </tr>
            <tr>
                <td style="padding:0"> according to EN 62446, Annex C</td>
            </tr>
        </table>

        @if($data['client_type']=='1')
        <table style="line-height: 10px;">
            <thead>
                <tr>
                    <th colspan="5" style="border: none; padding-left:0; font-size:20px">Test</th>
                </tr>
                <tr>
                    <th colspan="2" style="border: 1px solid; line-height:24px;">String</th>
                    <th style="border: 1px solid;">1</th>
                    <th style="border: 1px solid;">2</th>
                    <th style="border: 1px solid;">3</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="2" style="border: 1px solid;">PV generator</td>
                    <td style="border: 1px solid;">Module</td>
                    <td style="border: 1px solid;">{{ $test_report->pv_generator_module1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->pv_generator_module2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->pv_generator_module3 ?? '' }}</td>
                </tr>
                <tr>
                    <td style="border: 1px solid;">Quantity</td>
                    <td style="border: 1px solid;">{{ $test_report->pv_generator_quantity1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->pv_generator_quantity2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->pv_generator_quantity3 ?? '' }}</td>
                </tr>
                <tr>
                    <td rowspan="2" style="border: 1px solid;">PV generator parameters</td>
                    <td style="border: 1px solid;">Voc (STC)</td>
                    <td style="border: 1px solid;">{{ $test_report->generator_parameters_voc1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->generator_parameters_voc2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->generator_parameters_voc3 ?? '' }}</td>
                </tr>
                <tr>
                    <td style="border: 1px solid;">Isc (STC)</td>
                    <td style="border: 1px solid;">{{ $test_report->generator_parameters_isc1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->generator_parameters_isc2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->generator_parameters_isc3 ?? '' }}</td>
                </tr>
                <tr>
                    <td rowspan="4" style="border: 1px solid;line-height: 18px;">Protection device (branch fuse)</td>
                    <td style="border: 1px solid;">Type</td>
                    <td style="border: 1px solid;">{{ $test_report->protection_device1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->protection_device2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->protection_device3 ?? '' }}</td>
                </tr>
                <tr>
                    <td style="border: 1px solid;">Rated Value (A)</td>
                    <td style="border: 1px solid;">{{ $test_report->device_rated_value1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->device_rated_value2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->device_rated_value3 ?? '' }}</td>
                </tr>
                <tr>
                    <td style="border: 1px solid;">DC rating (A)</td>
                    <td style="border: 1px solid;">{{ $test_report->device_dc_rating1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->device_dc_rating2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->device_dc_rating3 ?? '' }}</td>
                </tr>
                <tr>
                    <td style="border: 1px solid;">Capacity (kA)</td>
                    <td style="border: 1px solid;">{{ $test_report->device_capacity1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->device_capacity2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->device_capacity3 ?? '' }}</td>
                </tr>
                <tr>
                    <td rowspan="3" style="border: 1px solid;">Wiring</td>
                    <td style="border: 1px solid;">Type</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_type1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_type2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_type3 ?? '' }}</td>
                </tr>
                <tr>
                    <td style="border: 1px solid;white-space: nowrap;">Phase conductor (mm<sup>2</sup>)</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_phase1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_phase2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_phase3 ?? '' }}</td>
                </tr>
                <tr>
                    <td style="border: 1px solid;">Earth conductor (mm<sup>2</sup>)</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_earth1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_earth2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_earth3 ?? '' }}</td>
                </tr>
                <tr>
                    <td rowspan="3" style="border: 1px solid; line-height:18px">Testing and Measurement of the strand
                    </td>
                    <td style="border: 1px solid;">Voc (V)</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_voc1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_voc2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_voc3 ?? '' }}</td>
                </tr>
                <tr>
                    <td style="border: 1px solid;">Isc (A)</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_isc1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_isc2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_isc3 ?? '' }}</td>
                </tr>
                <tr>
                    <td style="border: 1px solid;">Irradiance</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_irradiance1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_irradiance2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_irradiance3 ?? '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" style="border: 1px solid;">Polarity monitoring</td>
                    <td style="border: 1px solid;">{{ $test_report->polarity_monitoring1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->polarity_monitoring2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->polarity_monitoring3 ?? '' }}</td>
                </tr>
                <tr>
                    <td rowspan="3" style="border: 1px solid;line-height:18px">Array Insulation Resistance</td>
                    <td style="border: 1px solid;">Test Voltage (V)</td>
                    <td style="border: 1px solid;">{{ $test_report->array_test_voltage1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->array_test_voltage2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->array_test_voltage3 ?? '' }}</td>
                </tr>
                <tr>
                    <td style="border: 1px solid;">Pos – Earth (MΩ)</td>
                    <td style="border: 1px solid;">{{ $test_report->array_pos1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->array_pos2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->array_pos3 ?? '' }}</td>
                </tr>
                <tr>
                    <td style="border: 1px solid;">Neg – Earth (MΩ)</td>
                    <td style="border: 1px solid;">{{ $test_report->array_neg1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->array_neg2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->array_neg3 ?? '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" style="border: 1px solid;">Earth continuity (where fitted)</td>
                    <td style="border: 1px solid;">{{ $test_report->earth_continuty1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->earth_continuty2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->earth_continuty3 ?? '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" style="border: 1px solid;line-height:18px">Switchgear functioning correctly</td>
                    <td style="border: 1px solid;">{{ $test_report->switchgear_functioning1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->switchgear_functioning2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->switchgear_functioning3 ?? '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" style="border: 1px solid;">Inverter Make/Model</td>
                    <td style="border: 1px solid;">{{ $test_report->test_inverter_make1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->test_inverter_make2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->test_inverter_make3 ?? '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" style="border: 1px solid;">Inverter Serial Number</td>
                    <td style="border: 1px solid;">{{ $test_report->inverter_serial_no1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->inverter_serial_no2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->inverter_serial_no3 ?? '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" style="border: 1px solid;">Inverter functioning correctly</td>
                    <td style="border: 1px solid;">{{ $test_report->inverter_functioning1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->inverter_functioning2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->inverter_functioning3 ?? '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" style="border: 1px solid;">Loss of mains test</td>
                    <td style="border: 1px solid;">{{ $test_report->loss_1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->loss_2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->loss_3 ?? '' }}</td>
                </tr>
            </tbody>
        </table>
        @elseif ($data['client_type']=='2')
        <table style="line-height: 10px;">
            <thead>
                <tr>
                    <th colspan="11" style="border: none; padding-left:0; font-size:20px">Test</th>
                </tr>
                <tr>
                    <th colspan="2" style="border: 1px solid; line-height:24px;">String</th>
                    <th style="border: 1px solid;">1</th>
                    <th style="border: 1px solid;">2</th>
                    <th style="border: 1px solid;">3</th>
                    <th style="border: 1px solid;">4</th>
                    <th style="border: 1px solid;">5</th>
                    <th style="border: 1px solid;">6</th>
                    <th style="border: 1px solid;">7</th>
                    <th style="border: 1px solid;">8</th>
                    <th style="border: 1px solid;">9</th>
                    <th style="border: 1px solid;">10</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="2" style="border: 1px solid;">PV generator</td>
                    <td style="border: 1px solid;">Module</td>
                    <td style="border: 1px solid;">{{ $test_report->pv_generator_module1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->pv_generator_module2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->pv_generator_module3 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->pv_generator_module4 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->pv_generator_module5 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->pv_generator_module6 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->pv_generator_module7 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->pv_generator_module8 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->pv_generator_module9 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->pv_generator_module10 ?? '' }}</td>
                </tr>
                <tr>
                    <td style="border: 1px solid;">Quantity</td>
                    <td style="border: 1px solid;">{{ $test_report->pv_generator_quantity1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->pv_generator_quantity2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->pv_generator_quantity3 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->pv_generator_quantity4 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->pv_generator_quantity5 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->pv_generator_quantity6 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->pv_generator_quantity7 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->pv_generator_quantity8 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->pv_generator_quantity9 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->pv_generator_quantity10 ?? '' }}</td>
                </tr>
                <tr>
                    <td rowspan="2" style="border: 1px solid;">PV generator parameters</td>
                    <td style="border: 1px solid;">Voc (STC)</td>
                    <td style="border: 1px solid;">{{ $test_report->generator_parameters_voc1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->generator_parameters_voc2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->generator_parameters_voc3 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->generator_parameters_voc4 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->generator_parameters_voc5 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->generator_parameters_voc6 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->generator_parameters_voc7 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->generator_parameters_voc8 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->generator_parameters_voc9 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->generator_parameters_voc10 ?? '' }}</td>
                </tr>
                <tr>
                    <td style="border: 1px solid;">Isc (STC)</td>
                    <td style="border: 1px solid;">{{ $test_report->generator_parameters_isc1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->generator_parameters_isc2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->generator_parameters_isc3 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->generator_parameters_isc4 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->generator_parameters_isc5 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->generator_parameters_isc6 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->generator_parameters_isc7 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->generator_parameters_isc8 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->generator_parameters_isc9 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->generator_parameters_isc10 ?? '' }}</td>
                </tr>
                <tr>
                    <td rowspan="4" style="border: 1px solid;line-height: 18px;">Protection device (branch fuse)</td>
                    <td style="border: 1px solid;">Type</td>
                    <td style="border: 1px solid;">{{ $test_report->protection_device1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->protection_device2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->protection_device3 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->protection_device4 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->protection_device5 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->protection_device6 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->protection_device7 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->protection_device8 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->protection_device9 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->protection_device10 ?? '' }}</td>
                </tr>
                <tr>
                    <td style="border: 1px solid;">Rated Value (A)</td>
                    <td style="border: 1px solid;">{{ $test_report->device_rated_value1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->device_rated_value2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->device_rated_value3 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->device_rated_value4 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->device_rated_value5 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->device_rated_value6 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->device_rated_value7 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->device_rated_value8 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->device_rated_value9 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->device_rated_value10 ?? '' }}</td>
                </tr>
                <tr>
                    <td style="border: 1px solid;">DC rating (A)</td>
                    <td style="border: 1px solid;">{{ $test_report->device_dc_rating1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->device_dc_rating2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->device_dc_rating3 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->device_dc_rating4 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->device_dc_rating5 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->device_dc_rating6 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->device_dc_rating7 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->device_dc_rating8 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->device_dc_rating9 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->device_dc_rating10 ?? '' }}</td>
                </tr>
                <tr>
                    <td style="border: 1px solid;">Capacity (kA)</td>
                    <td style="border: 1px solid;">{{ $test_report->device_capacity1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->device_capacity2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->device_capacity3 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->device_capacity4 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->device_capacity5 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->device_capacity6 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->device_capacity7 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->device_capacity8 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->device_capacity9 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->device_capacity10 ?? '' }}</td>
                </tr>
                <tr>
                    <td rowspan="3" style="border: 1px solid;">Wiring</td>
                    <td style="border: 1px solid;">Type</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_type1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_type2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_type3 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_type4 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_type5 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_type6 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_type7 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_type8 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_type9 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_type10 ?? '' }}</td>
                </tr>
                <tr>
                    <td style="border: 1px solid;white-space: nowrap;">Phase conductor (mm<sup>2</sup>)</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_phase1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_phase2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_phase3 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_phase4 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_phase5 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_phase6 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_phase7 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_phase8 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_phase9 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_phase10 ?? '' }}</td>
                </tr>
                <tr>
                    <td style="border: 1px solid;">Earth conductor (mm<sup>2</sup>)</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_earth1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_earth2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_earth3 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_earth4 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_earth5 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_earth6 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_earth7 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_earth8 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_earth9 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->wiring_earth10 ?? '' }}</td>
                </tr>
                <tr>
                    <td rowspan="3" style="border: 1px solid; line-height:18px">Testing and Measurement of the strand
                    </td>
                    <td style="border: 1px solid;">Voc (V)</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_voc1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_voc2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_voc3 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_voc4 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_voc5 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_voc6 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_voc7 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_voc8 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_voc9 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_voc10 ?? '' }}</td>
                </tr>
                <tr>
                    <td style="border: 1px solid;">Isc (A)</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_isc1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_isc2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_isc3 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_isc4 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_isc5 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_isc6 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_isc7 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_isc8 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_isc9 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_isc10 ?? '' }}</td>
                </tr>
                <tr>
                    <td style="border: 1px solid;">Irradiance</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_irradiance1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_irradiance2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_irradiance3 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_irradiance4 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_irradiance5 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_irradiance6 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_irradiance7 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_irradiance8 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_irradiance9 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->tm_irradiance10 ?? '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" style="border: 1px solid;">Polarity monitoring</td>
                    <td style="border: 1px solid;">{{ $test_report->polarity_monitoring1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->polarity_monitoring2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->polarity_monitoring3 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->polarity_monitoring4 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->polarity_monitoring5 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->polarity_monitoring6 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->polarity_monitoring7 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->polarity_monitoring8 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->polarity_monitoring9 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->polarity_monitoring10 ?? '' }}</td>
                </tr>
                <tr>
                    <td rowspan="3" style="border: 1px solid;line-height:18px">Array Insulation Resistance</td>
                    <td style="border: 1px solid;">Test Voltage (V)</td>
                    <td style="border: 1px solid;">{{ $test_report->array_test_voltage1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->array_test_voltage2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->array_test_voltage3 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->array_test_voltage4 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->array_test_voltage5 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->array_test_voltage6 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->array_test_voltage7 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->array_test_voltage8 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->array_test_voltage9 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->array_test_voltage10 ?? '' }}</td>
                </tr>
                <tr>
                    <td style="border: 1px solid;">Pos – Earth (MΩ)</td>
                    <td style="border: 1px solid;">{{ $test_report->array_pos1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->array_pos2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->array_pos3 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->array_pos4 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->array_pos5 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->array_pos6 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->array_pos7 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->array_pos8 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->array_pos9 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->array_pos10 ?? '' }}</td>
                </tr>
                <tr>
                    <td style="border: 1px solid;">Neg – Earth (MΩ)</td>
                    <td style="border: 1px solid;">{{ $test_report->array_neg1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->array_neg2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->array_neg3 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->array_neg4 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->array_neg5 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->array_neg6 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->array_neg7 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->array_neg8 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->array_neg9 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->array_neg10 ?? '' }}</td>
                </tr>
                <tr>
                    <td colspan="2" style="border: 1px solid;">Earth continuity (where fitted)</td>
                    <td style="border: 1px solid;">{{ $test_report->earth_continuty1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->earth_continuty2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->earth_continuty3 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->earth_continuty4 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->earth_continuty5 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->earth_continuty6 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->earth_continuty7 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->earth_continuty8 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->earth_continuty9 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->earth_continuty10 ?? '' }}</td>
                    {{-- <td style="border: 1px solid;"></td> --}}
                </tr>
                <tr>
                    <td colspan="2" style="border: 1px solid;line-height:18px">Switchgear functioning correctly</td>
                    <td style="border: 1px solid;">{{ $test_report->switchgear_functioning1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->switchgear_functioning2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->switchgear_functioning3 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->switchgear_functioning4 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->switchgear_functioning5 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->switchgear_functioning6 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->switchgear_functioning7 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->switchgear_functioning8 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->switchgear_functioning9 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->switchgear_functioning10 ?? '' }}</td>
                    {{-- <td style="border: 1px solid;"></td> --}}
                </tr>
                <tr>
                    <td colspan="2" style="border: 1px solid;">Inverter Make/Model</td>
                    <td style="border: 1px solid;">{{ $test_report->test_inverter_make1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->test_inverter_make2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->test_inverter_make3 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->test_inverter_make4 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->test_inverter_make5 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->test_inverter_make6 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->test_inverter_make7 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->test_inverter_make8 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->test_inverter_make9 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->test_inverter_make10 ?? '' }}</td>
                    {{-- <td style="border: 1px solid;"></td> --}}
                </tr>
                <tr>
                    <td colspan="2" style="border: 1px solid;">Inverter Serial Number</td>
                    <td style="border: 1px solid;">{{ $test_report->inverter_serial_no1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->inverter_serial_no2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->inverter_serial_no3 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->inverter_serial_no4 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->inverter_serial_no5 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->inverter_serial_no6 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->inverter_serial_no7 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->inverter_serial_no8 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->inverter_serial_no9 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->inverter_serial_no10 ?? '' }}</td>
                    {{-- <td style="border: 1px solid;"></td> --}}
                </tr>
                <tr>
                    <td colspan="2" style="border: 1px solid;">Inverter functioning correctly</td>
                    <td style="border: 1px solid;">{{ $test_report->inverter_functioning1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->inverter_functioning2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->inverter_functioning3 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->inverter_functioning4 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->inverter_functioning5 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->inverter_functioning6 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->inverter_functioning7 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->inverter_functioning8 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->inverter_functioning9 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->inverter_functioning10 ?? '' }}</td>
                    {{-- <td style="border: 1px solid;"></td> --}}
                </tr>
                <tr>
                    <td colspan="2" style="border: 1px solid;">Loss of mains test</td>
                    <td style="border: 1px solid;">{{ $test_report->loss_1 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->loss_2 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->loss_3 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->loss_4 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->loss_5 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->loss_6 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->loss_7 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->loss_8 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->loss_9 ?? '' }}</td>
                    <td style="border: 1px solid;">{{ $test_report->loss_10 ?? '' }}</td>
                </tr>
            </tbody>
        </table>
        @endif

        <h2>Notes:</h2>
        {{-- <p style="border-bottom: 1px solid; width: 80%"></p>
        <p style="border-bottom: 1px solid; width: 100%"></p> --}}
        <p style="border-bottom: 1px solid; width: 100%">{{ $data['notes'] ?? '' }}</p>

    </div>

</body>

</html>
