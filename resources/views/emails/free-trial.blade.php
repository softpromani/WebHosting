<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Free Trial Request</title>
</head>

<body style="font-family: Arial, sans-serif; color: #333; background-color: #f7f7f7; padding: 20px;">
    {{-- Company Logo --}}
    <div style="text-align: center; margin-bottom: 30px;">
        <img src="{{ asset('storage/' . settingValue('logo')) }}" alt="Mounteko" style="max-width: 200px;">
    </div>

    <h2 style="text-align: center;">New Free Trial Application</h2>

    <table style="width: 100%; border-collapse: collapse; margin-top: 20px; background-color: #fff;">
        <tbody>
            <tr style="background-color: #f0f0f0;">
                <th style="text-align: left; padding: 10px; border: 1px solid #ccc;">Field</th>
                <th style="text-align: left; padding: 10px; border: 1px solid #ccc;">Value</th>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ccc;">Name</td>
                <td style="padding: 10px; border: 1px solid #ccc;">{{ $formData->name }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ccc;">Email</td>
                <td style="padding: 10px; border: 1px solid #ccc;">{{ $formData->email }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ccc;">Phone Number</td>
                <td style="padding: 10px; border: 1px solid #ccc;">{{ $formData->phone_number ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ccc;">Business Name</td>
                <td style="padding: 10px; border: 1px solid #ccc;">{{ $formData->business_name ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ccc;">Application Detail</td>
                <td style="padding: 10px; border: 1px solid #ccc;">{{ $formData->application_detail ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ccc;">License Key</td>
                <td style="padding: 10px; border: 1px solid #ccc;">{{ $formData->license_key ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ccc;">Number of Users</td>
                <td style="padding: 10px; border: 1px solid #ccc;">{{ $formData->number_users }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ccc;">Username</td>
                <td style="padding: 10px; border: 1px solid #ccc;">{{ $formData->username ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ccc;">Additional Comment</td>
                <td style="padding: 10px; border: 1px solid #ccc;">{{ $formData->aditional_comment ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ccc;">Agreement</td>
                <td style="padding: 10px; border: 1px solid #ccc;">
                    {{ $formData->agreement ? 'Agreed' : 'Not Agreed' }}
                </td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ccc;">Submitted At</td>
                <td style="padding: 10px; border: 1px solid #ccc;">
                    {{ $formData->created_at->setTimezone('Asia/Kolkata')->format('d M Y, h:i A') }}
                </td>

            </tr>
        </tbody>
    </table>
</body>

</html>
