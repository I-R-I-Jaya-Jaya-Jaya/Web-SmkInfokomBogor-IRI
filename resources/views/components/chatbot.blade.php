{{-- ============================================================
     CHATBOT AI - SMK INFOKOM (widget kanan bawah)
     CSS : public/CSS/chatbot.css
     JS  : public/JS/chatbot.js
     API : POST /chatbot  (ChatbotController@send, route: chatbot.send)
     ============================================================ --}}
<div
    id="ai-chatbot"
    class="cb cb-boot"
    data-endpoint="{{ route('chatbot.send') }}"
    data-logo="{{ asset('IMG/home/logo-infokom.svg') }}"
>

    {{-- Pop up pemberitahuan (muncul otomatis saat pengunjung masuk ke website) --}}
    <div class="cb-teaser" id="cbTeaser" role="status" aria-live="polite" aria-hidden="true">
        <button type="button" class="cb-teaser-close" id="cbTeaserClose" aria-label="Tutup pemberitahuan">&times;</button>

        <div class="cb-teaser-top">
            <span class="cb-teaser-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 11.5a8.4 8.4 0 0 1-9 8.4 9 9 0 0 1-3.6-.8L3 21l1.9-5.1A8.4 8.4 0 0 1 3 11.5 8.5 8.5 0 0 1 12 3a8.5 8.5 0 0 1 9 8.5z"/>
                    <path d="M8.6 11.6h.01M12 11.6h.01M15.4 11.6h.01" stroke-width="2.6"/>
                </svg>
            </span>
            <div class="cb-teaser-text">
                <strong>Asisten INFOKOM <span class="cb-teaser-badge">AI</span></strong>
                <p>Ada pertanyaan seputar jurusan, PPDB, biaya, atau fasilitas? Tanyakan di sini, kami siap membantu.</p>
            </div>
        </div>

        <button type="button" class="cb-teaser-cta" id="cbTeaserCta">Mulai chat sekarang</button>
    </div>

    {{-- Jendela chat --}}
    <section
        class="cb-window"
        id="cbWindow"
        role="dialog"
        aria-modal="false"
        aria-labelledby="cbTitle"
        aria-hidden="true"
    >
        <header class="cb-head">
            <span class="cb-head-glow" aria-hidden="true"></span>

            <div class="cb-avatar" aria-hidden="true">
                <svg class="cb-avatar-fallback" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="4" y="8" width="16" height="11" rx="3.5"/>
                    <path d="M12 8V5"/><circle cx="12" cy="4" r="1"/>
                    <circle cx="9" cy="13.5" r="1" fill="currentColor"/><circle cx="15" cy="13.5" r="1" fill="currentColor"/>
                </svg>
                <img src="{{ asset('IMG/home/logo-infokom.svg') }}" alt="" onerror="this.remove()">
                <span class="cb-online"></span>
            </div>

            <div class="cb-head-text">
                <h2 id="cbTitle">Asisten INFOKOM</h2>
                <p><span class="cb-badge-ai">AI</span> Online · siap membantu</p>
            </div>

            <div class="cb-head-actions">
                <button type="button" class="cb-icon-btn" id="cbReset" aria-label="Mulai percakapan baru" title="Percakapan baru">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M3 12a9 9 0 1 0 3-6.7"/><path d="M3 4v5h5"/>
                    </svg>
                </button>
                <button type="button" class="cb-icon-btn" id="cbClose" aria-label="Tutup chat" title="Tutup">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" aria-hidden="true">
                        <path d="M6 6l12 12M18 6 6 18"/>
                    </svg>
                </button>
            </div>
        </header>

        <div class="cb-body" id="cbBody" role="log" aria-live="polite" aria-relevant="additions"></div>

        <form class="cb-form" id="cbForm" autocomplete="off">
            <div class="cb-input-wrap">
                <textarea
                    id="cbInput"
                    rows="1"
                    maxlength="500"
                    placeholder="Tulis pertanyaan Anda…"
                    aria-label="Tulis pertanyaan Anda"
                ></textarea>
                <span class="cb-count" id="cbCount" aria-hidden="true"></span>
            </div>
            <button type="submit" class="cb-send" id="cbSend" aria-label="Kirim pesan" disabled>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M22 2 11 13"/><path d="M22 2 15 22l-4-9-9-4 20-7z"/>
                </svg>
            </button>
        </form>

        <p class="cb-foot">Dijawab oleh AI berdasarkan informasi di website sekolah. Untuk kepastian, hubungi sekolah.</p>
    </section>

    {{-- Tombol melayang --}}
    <button
        type="button"
        class="cb-fab"
        id="cbFab"
        aria-label="Buka chat dengan Asisten SMK INFOKOM"
        aria-expanded="false"
        aria-controls="cbWindow"
    >
        <span class="cb-fab-ring" aria-hidden="true"></span>
        <span class="cb-fab-ring cb-fab-ring--2" aria-hidden="true"></span>
        <span class="cb-fab-badge" aria-hidden="true">1</span>

        <svg class="cb-fab-icon cb-fab-open" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M21 11.5a8.4 8.4 0 0 1-9 8.4 9 9 0 0 1-3.6-.8L3 21l1.9-5.1A8.4 8.4 0 0 1 3 11.5 8.5 8.5 0 0 1 12 3a8.5 8.5 0 0 1 9 8.5z"/>
            <path class="cb-spark" d="M12 8.2v.01M8.6 11.6h.01M12 11.6h.01M15.4 11.6h.01" stroke-width="2.6"/>
        </svg>
        <svg class="cb-fab-icon cb-fab-x" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" aria-hidden="true">
            <path d="M6 6l12 12M18 6 6 18"/>
        </svg>
    </button>
</div>