<div class="widget bg-white p-a20 recent-posts-entry homepage-widget">
    <div class="widget-title style-1">Statistik Pengunjung</div>
    <div class="widget-post-bx">
        <div class="widget-arsip">
            <ul class="timeline" style="list-style-type: none; padding: 0; margin: 0;">
                <li style="margin-bottom: 20px;">
                    <div style="display: flex; align-items: center;">
                        <i class="fa fa-user"
                            style="color: white; background-color: #007bff; padding: 12px; border-radius: 50%; font-size: 24px; flex-shrink: 0;"></i>
                        <div class="timeline-item" style="margin-left: 15px;">
                            <div class="timeline-header" style="font-weight: bold;">IP Address:</div>
                            <div class="timeline-content">{{ request()->ip() }}</div>
                        </div>
                    </div>
                </li>
                <li style="margin-bottom: 20px;">
                    <div style="display: flex; align-items: center;">
                        <i class="fa fa-globe"
                            style="color: white; background-color: #28a745; padding: 12px; border-radius: 50%; font-size: 24px; flex-shrink: 0;"></i>
                        <div class="timeline-item" style="margin-left: 15px;">
                            <div class="timeline-header" style="font-weight: bold;">Browser:</div>
                            <div class="timeline-content">{{ request()->header('User-Agent') }}</div>
                        </div>
                    </div>
                </li>
                <li style="margin-bottom: 20px;">
                    <div style="display: flex; align-items: center;">
                        <i class="fa fa-desktop"
                            style="color: white; background-color: #ffc107; padding: 12px; border-radius: 50%; font-size: 24px; flex-shrink: 0;"></i>
                        <div class="timeline-item" style="margin-left: 15px;">
                            <div class="timeline-header" style="font-weight: bold;">Sistem Operasi:</div>
                            <div class="timeline-content">{{ php_uname('s') }} {{ php_uname('r') }}</div>
                        </div>
                    </div>
                </li>
                <li style="margin-bottom: 20px;">
                    <div style="display: flex; align-items: center;">
                        <i class="fa fa-users"
                            style="color: white; background-color: #dc3545; padding: 12px; border-radius: 50%; font-size: 24px; flex-shrink: 0;"></i>
                        <div class="timeline-item" style="margin-left: 15px;">
                            <div class="timeline-header" style="font-weight: bold;">Total Pengunjung:</div>
                            <div class="timeline-content">{{ number_format($totalPengunjung, 0, ',', '.') }}</div>
                        </div>
                    </div>
                </li>
                <!-- Tambahkan statistik lain sesuai kebutuhan -->
            </ul>
        </div>
    </div>
</div>
