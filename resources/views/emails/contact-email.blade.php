<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Contact Us Email</title>
</head>

<body style="font-family: Arial, sans-serif; color: #333; background-color: #f7f7f7; padding: 20px;">
    {{-- Company Logo --}}
    @php
        $logoPath = settingValue('logo'); // e.g., "uploads/setting/logo.png"
        $logoUrl = env('APP_URL') . '/storage/' . $logoPath;
    @endphp

    @if ($logoUrl)
        <div style="text-align: center; margin-bottom: 30px;">
            <img src="{{ $logoUrl }}" alt="Mounteko" style="max-width: 200px;">
        </div>
    @endif

    <h2 style="text-align: center;">New Contact Us Application</h2>

    <table style="width: 100%; border-collapse: collapse; margin-top: 20px; background-color: #fff;">
        <tbody>
            <tr style="background-color: #f0f0f0;">
                <th style="text-align: left; padding: 10px; border: 1px solid #ccc;">Field</th>
                <th style="text-align: left; padding: 10px; border: 1px solid #ccc;">Value</th>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ccc;">Name</td>
                <td style="padding: 10px; border: 1px solid #ccc;">{{ $formData->fname.' '.$formData->lname }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ccc;">Email</td>
                <td style="padding: 10px; border: 1px solid #ccc;">{{ $formData->email }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ccc;">Phone Number</td>
                <td style="padding: 10px; border: 1px solid #ccc;">{{ $formData->phone ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ccc;">Subject</td>
                <td style="padding: 10px; border: 1px solid #ccc;">{{ $formData->subject ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ccc;">Message</td>
                <td style="padding: 10px; border: 1px solid #ccc;">{{ $formData->message ?? 'N/A' }}</td>
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
