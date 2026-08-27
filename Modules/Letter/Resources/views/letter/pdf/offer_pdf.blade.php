<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{{ $pageTitle }}</title>
    <style>
        @page {
            size: A4 portrait;
            margin: 10mm 15mm 18mm 15mm;
        }

        body {
            font-family: 'DejaVu Sans', sans-serif;
            font-size: 9.5pt;
            line-height: 1.5;
            color: #1e293b;
            margin: 0;
            padding: 0;
        }

        /* Top Accent Bar */
        .top-bar {
            height: 4px;
            background: #0A58CA;
            margin-bottom: 12px;
        }

        /* Letterhead Header */
        .header-table {
            width: 100%;
            border-collapse: collapse;
            border-bottom: 2px solid #0A58CA;
            padding-bottom: 12px;
            margin-bottom: 15px;
        }

        .header-logo {
            width: 45%;
            vertical-align: middle;
        }

        .header-logo img {
            max-height: 55px;
            width: auto;
        }

        .header-company-info {
            width: 55%;
            text-align: right;
            vertical-align: middle;
            font-size: 8.5pt;
            color: #475569;
            line-height: 1.4;
        }

        .company-name {
            font-size: 14pt;
            font-weight: bold;
            color: #0F172A;
            margin-bottom: 2px;
        }

        /* Meta details */
        .meta-table {
            width: 100%;
            margin-bottom: 12px;
            font-size: 9pt;
        }

        .meta-table td {
            vertical-align: top;
        }

        .recipient-box {
            background-color: #F8FAFC;
            border: 1px solid #E2E8F0;
            border-radius: 4px;
            padding: 10px 14px;
            margin-bottom: 12px;
            font-size: 9.5pt;
        }

        .subject-box {
            font-weight: bold;
            font-size: 10pt;
            color: #0F172A;
            margin: 12px 0;
            padding: 8px 12px;
            background-color: #EFF6FF;
            border-left: 4px solid #0A58CA;
        }

        .section-title {
            font-size: 10pt;
            font-weight: bold;
            color: #0F172A;
            border-bottom: 1.5px solid #CBD5E1;
            padding-bottom: 3px;
            margin-top: 14px;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Details Grid Tables */
        .info-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 12px;
            font-size: 9pt;
        }

        .info-table th, .info-table td {
            border: 1px solid #CBD5E1;
            padding: 6px 10px;
            text-align: left;
        }

        .info-table th {
            background-color: #F1F5F9;
            color: #334155;
            font-weight: bold;
            width: 33%;
        }

        .info-table td {
            color: #0F172A;
        }

        /* Content Text */
        .body-text {
            text-align: justify;
            margin-bottom: 12px;
            white-space: pre-line;
            font-size: 9.5pt;
        }

        .acceptance-box {
            font-size: 9pt;
            color: #334155;
            background: #F8FAFC;
            border-left: 3.5px solid #0A58CA;
            padding: 8px 12px;
            margin-bottom: 15px;
        }

        /* Signatory & Acceptance Box */
        .sign-table {
            width: 100%;
            margin-top: 15px;
            border-collapse: collapse;
            page-break-inside: avoid;
        }

        .sign-table td {
            width: 50%;
            vertical-align: bottom;
        }

        .signature-img {
            max-height: 55px;
            width: auto;
            display: block;
            margin-bottom: 4px;
        }

        .sign-line {
            border-bottom: 1px solid #94A3B8;
            width: 80%;
            margin-top: 35px;
            margin-bottom: 6px;
        }
    </style>
</head>
<body>

    <script type="text/php">
        if (isset($pdf)) {
            $text = "BranZo Techno Solution — Strictly Confidential & Personal | Page {PAGE_NUM} of {PAGE_COUNT}";
            $font = $fontMetrics->get_font("DejaVu Sans", "normal");
            $size = 8;
            $color = array(0.58, 0.64, 0.72);
            $pdf->page_text(130, 815, $text, $font, $size, $color);
        }
    </script>

    <div class="top-bar"></div>

    <!-- Header Letterhead -->
    <table class="header-table">
        <tr>
            <td class="header-logo">
                @if(file_exists(public_path('user-uploads/app-logo/brandzo-logo.png')))
                    <img src="{{ public_path('user-uploads/app-logo/brandzo-logo.png') }}" alt="BranZo Logo">
                @elseif(!empty($company->logo) && file_exists(public_path('user-uploads/app-logo/' . $company->logo)))
                    <img src="{{ public_path('user-uploads/app-logo/' . $company->logo) }}" alt="BranZo Logo">
                @else
                    <div style="font-size: 16pt; font-weight: bold; color: #0A58CA;">BranZo Techno Solution</div>
                @endif
            </td>
            <td class="header-company-info">
                <div class="company-name">{{ $company->company_name ?: 'BranZo Techno Solution' }}</div>
                <div>{{ $company->address ?: 'Saravanampatty, Coimbatore, Tamil Nadu – 641035' }}</div>
                <div>Phone: +91 9876543210 | Email: hr@brandzo.in</div>
                <div>Website: www.brandzo.in</div>
            </td>
        </tr>
    </table>

    <!-- Document Meta -->
    <table class="meta-table">
        <tr>
            <td>
                <strong>REF:</strong> {{ $offerDetails['offer_ref_no'] ?? ('BZ' . str_pad($letter->id, 3, '0', STR_PAD_LEFT)) }}
            </td>
            <td style="text-align: right;">
                <strong>Date:</strong> {{ date('d/m/Y', strtotime($letter->created_at ?: now())) }}
            </td>
        </tr>
    </table>

    <!-- Recipient -->
    <div class="recipient-box">
        <strong>To:</strong><br>
        <strong style="font-size: 10.5pt; color: #0F172A;">{{ $offerDetails['employee_name'] ?? ($letter->employee_name ?: 'Candidate Name') }}</strong><br>
        @if(!empty($offerDetails['address']))
            {!! nl2br(e($offerDetails['address'])) !!}<br>
        @endif
        @if(!empty($offerDetails['email']))
            Email: {{ $offerDetails['email'] }} | Mobile: {{ $offerDetails['mobile'] ?? '--' }}
        @endif
    </div>

    <!-- Subject -->
    <div class="subject-box">
        SUBJECT: {{ $offerDetails['subject'] ?? 'OFFER OF EMPLOYMENT' }}
    </div>

    <!-- Salutation & Opening -->
    <div class="body-text">
Dear {{ $offerDetails['employee_name'] ?? 'Candidate' }},

{{ $offerDetails['opening_paragraph'] ?? 'We are pleased to offer you employment with BranZo Techno Solution. Based on your qualifications and interview performance, we believe your skills will be a valuable addition to our team.' }}
    </div>

    <!-- Section 1: Employment Details -->
    <div class="section-title">1. Employment Details</div>
    <table class="info-table">
        <tr>
            <th>Employee ID</th>
            <td>{{ $offerDetails['employee_id_val'] ?? ('00' . $letter->id) }}</td>
        </tr>
        <tr>
            <th>Designation</th>
            <td><strong>{{ $offerDetails['designation'] ?? 'Software Engineer' }}</strong></td>
        </tr>
        <tr>
            <th>Department</th>
            <td>{{ $offerDetails['department'] ?? 'Engineering' }}</td>
        </tr>
        <tr>
            <th>Joining Date</th>
            <td><strong>{{ !empty($offerDetails['joining_date']) ? date('d/m/Y', strtotime($offerDetails['joining_date'])) : date('d/m/Y') }}</strong></td>
        </tr>
        <tr>
            <th>Employment Type</th>
            <td>{{ $offerDetails['employment_type'] ?? 'Full Time' }}</td>
        </tr>
        <tr>
            <th>Reporting Manager</th>
            <td>{{ $offerDetails['reporting_to'] ?? 'Managing Director' }}</td>
        </tr>
        <tr>
            <th>Work Location</th>
            <td>{{ $offerDetails['work_location'] ?? 'BranZo Techno Solution - Head Office' }}</td>
        </tr>
    </table>

    <!-- Section 2: Compensation & Benefits -->
    <div class="section-title">2. Compensation & Benefits</div>
    <table class="info-table">
        <tr>
            <th>Annual CTC</th>
            <td><strong style="color: #0A58CA; font-size: 10pt;">₹{{ number_format(floatval(str_replace(['₹', ','], '', $offerDetails['annual_ctc'] ?? 600000)), 2) }} Per Annum</strong></td>
        </tr>
        <tr>
            <th>Monthly Take-Home</th>
            <td>{{ str_replace('?', '₹', $offerDetails['monthly_takehome'] ?? ('₹' . number_format(round(($offerDetails['annual_ctc'] ?? 600000)/12, 2), 2) . ' / month')) }}</td>
        </tr>
        @if(!empty($offerDetails['other_benefits']))
        <tr>
            <th>Benefits & Allowances</th>
            <td>{!! nl2br(e($offerDetails['other_benefits'])) !!}</td>
        </tr>
        @endif
        @if(!empty($offerDetails['incentives']))
        <tr>
            <th>Performance Incentives</th>
            <td>{!! nl2br(e($offerDetails['incentives'])) !!}</td>
        </tr>
        @endif
    </table>

    <!-- Section 3: Terms & Conditions -->
    <div class="section-title">3. Terms & Conditions</div>
    <div class="body-text">
{!! nl2br(e($offerDetails['terms_conditions'] ?? "1. Confidentiality: You shall maintain strict confidentiality regarding company data, trade secrets, and client information.\n2. Probation Period: Performance will be reviewed prior to completion of the " . ($offerDetails['probation_period'] ?? '3 Months') . " probation period.\n3. Notice Period: Termination by either party requires " . ($offerDetails['notice_period'] ?? '1 Month') . " written notice or salary in lieu thereof.")) !!}
    </div>

    @if(!empty($offerDetails['additional_clauses']))
    <div class="section-title">4. Additional Terms</div>
    <div class="body-text">
{!! nl2br(e($offerDetails['additional_clauses'])) !!}
    </div>
    @endif

    <!-- Section 5: Offer Acceptance & Signatures -->
    <div style="page-break-inside: avoid; margin-top: 15px;">
        <div class="section-title">5. Offer Acceptance</div>
        <div class="acceptance-box">
            "{{ $offerDetails['acceptance_text'] ?? 'I accept the offer of employment on the terms and conditions outlined in this letter and confirm my joining date as specified above.' }}"
        </div>

        <table class="sign-table">
            <tr>
                <td>
                    <strong style="color: #0F172A;">For BranZo Techno Solution</strong><br><br>
                    @if(file_exists(public_path('user-uploads/signatures/admin-signature.png')))
                        <img src="{{ public_path('user-uploads/signatures/admin-signature.png') }}" alt="Authorized Signature" class="signature-img">
                    @elseif(file_exists(public_path('user-uploads/signatures/admin-signature.jpg')))
                        <img src="{{ public_path('user-uploads/signatures/admin-signature.jpg') }}" alt="Authorized Signature" class="signature-img">
                    @elseif(file_exists(public_path('user-uploads/app-logo/admin-signature.jpg')))
                        <img src="{{ public_path('user-uploads/app-logo/admin-signature.jpg') }}" alt="Authorized Signature" class="signature-img">
                    @else
                        <div class="sign-line"></div>
                    @endif
                    <strong>{{ $offerDetails['signatory_name'] ?? 'L. Manikandan' }}</strong><br>
                    <span style="color: #475569; font-size: 8.5pt;">{{ $offerDetails['signatory_designation'] ?? 'Head of Human Resources' }}</span><br>
                    <span style="font-size: 8pt; color: #64748B;">Date: {{ date('d/m/Y') }}</span>
                </td>
                <td>
                    <strong style="color: #0F172A;">Candidate Acceptance</strong>
                    <div class="sign-line"></div>
                    <strong>Signature: ______________________</strong><br>
                    <span style="color: #475569; font-size: 8.5pt;">Name: {{ $offerDetails['employee_name'] ?? 'Candidate Name' }}</span><br>
                    <span style="font-size: 8pt; color: #64748B;">Date: ________________________</span>
                </td>
            </tr>
        </table>
    </div>

</body>
</html>
