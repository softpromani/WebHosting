<style>
    .service-pill-menu {
        background: #f8fbff;
        padding: 30px 0;
        border-bottom: 2px solid #e1ecf8;
    }
    .pill-track {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 12px;
    }
    .service-pill {
        background: #ffffff;
        color: #4b5d73;
        padding: 10px 22px;
        border-radius: 50px;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none !important;
        box-shadow: 0 4px 10px rgba(0,0,0,0.04);
        transition: all 0.3s ease;
        border: 1px solid #e1ecf8;
        display: inline-flex;
        align-items: center;
    }
    .service-pill:hover {
        background: #4facfe;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(79,172,254,0.3);
        border-color: #4facfe;
    }
    .service-pill.active {
        background: linear-gradient(135deg, #1a237e 0%, #0d47a1 100%);
        color: white;
        border-color: #1a237e;
        box-shadow: 0 6px 15px rgba(26,35,126,0.3);
    }
</style>

<div class="service-pill-menu">
    <div class="container">
        <div class="pill-track">
            @if(request()->routeIs('services.security-audits'))
                <span class="service-pill active"><i class="bi bi-check2-circle" style="margin-right: 6px; font-size: 16px;"></i> Firewall Setup</span>
            @else
                <a href="{{ route('services.security-audits') }}" class="service-pill">Firewall Setup</a>
            @endif

            @if(request()->routeIs('services.vpn-setup-remote-access'))
                <span class="service-pill active"><i class="bi bi-check2-circle" style="margin-right: 6px; font-size: 16px;"></i> VPN Setup & Remote Access</span>
            @else
                <a href="{{ route('services.vpn-setup-remote-access') }}" class="service-pill">VPN Setup & Remote Access</a>
            @endif

            @if(request()->routeIs('services.cloud-security-firewall'))
                <span class="service-pill active"><i class="bi bi-check2-circle" style="margin-right: 6px; font-size: 16px;"></i> Cloud Security</span>
            @else
                <a href="{{ route('services.cloud-security-firewall') }}" class="service-pill">Cloud Security</a>
            @endif

            @if(request()->routeIs('services.network-intrusion-detection'))
                <span class="service-pill active"><i class="bi bi-check2-circle" style="margin-right: 6px; font-size: 16px;"></i> Network Security</span>
            @else
                <a href="{{ route('services.network-intrusion-detection') }}" class="service-pill">Network Security</a>
            @endif

            @if(request()->routeIs('services.endpoint-protection'))
                <span class="service-pill active"><i class="bi bi-check2-circle" style="margin-right: 6px; font-size: 16px;"></i> Threat Detection & Endpoint</span>
            @else
                <a href="{{ route('services.endpoint-protection') }}" class="service-pill">Threat Detection & Endpoint</a>
            @endif

            @if(request()->routeIs('services.soc_setup_monitoring'))
                <span class="service-pill active"><i class="bi bi-check2-circle" style="margin-right: 6px; font-size: 16px;"></i> Security Audit</span>
            @else
                <a href="{{ route('services.soc_setup_monitoring') }}" class="service-pill">Security Audit</a>
            @endif

            @if(request()->routeIs('services.incident_response_recovery'))
                <span class="service-pill active"><i class="bi bi-check2-circle" style="margin-right: 6px; font-size: 16px;"></i> Firewall Monitoring</span>
            @else
                <a href="{{ route('services.incident_response_recovery') }}" class="service-pill">Firewall Monitoring</a>
            @endif

            @if(request()->routeIs('services.email-phishing-protection'))
                <span class="service-pill active"><i class="bi bi-check2-circle" style="margin-right: 6px; font-size: 16px;"></i> Email & Application Security</span>
            @else
                <a href="{{ route('services.email-phishing-protection') }}" class="service-pill">Email & Application Security</a>
            @endif
        </div>
    </div>
</div>
