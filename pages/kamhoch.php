<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Improved Tailwind Design with Logo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <style>
        .bg-orange-custom { background-color: #ff8800; }
        .text-orange-custom { color: #ff8800; }
        .bg-gradient-orange { background: linear-gradient(135deg, #ff8800, #ffaa33); }
        body { font-family: 'Noto Sans Khmer', sans-serif; }
        .card-hover:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); transition: all 0.3s ease; }
        .grid { padding-top: 2rem; }
        .hidden { display: none; }
        .tab-content {
            max-height: 47vh;
            overflow-y: scroll;
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        .tab-content::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>
<body class="bg-[#ff8800] min-h-screen flex flex-col items-center">

    <div class="w-full flex">
        <a href="../index.php" class="text-black font-medium py-2 px-4 rounded-lg flex items-center">
            <i class="fas text-3xl fa-arrow-left mr-2"></i>
        </a>
    </div>
    <div class="w-full flex pl-3">
        <h3 class="text-lg font-bold text-gray-800 mb-4">កំហូច</h3>
    </div>

    <div id="mistakes-summary" class="w-11/12 bg-white rounded-xl shadow-lg p-6 mb-6">
        <h3 class="text-lg font-bold text-gray-800 mb-4">សរុបចំនួន: 100</h3>
        <div class="flex items-center justify-between">
            <div class="relative flex items-center justify-center">
                <canvas id="progressChart" class="w-20 h-20"></canvas>
                <div class="absolute flex items-center justify-center">
                    <i class="fas fa-tools text-3xl text-orange-500"></i>
                </div>
            </div>
            <div class="flex flex-col space-y-4">
                <div class="flex flex-col">
                    <p class="text-sm text-yellow-500 font-medium">រងចាំ</p>
                    <p id="pending" class="text-sm font-bold text-gray-800">0</p>
                </div>
                <div class="flex flex-col">
                    <p class="text-sm text-green-700 font-medium">បានបញ្ចប់</p>
                    <p id="completed" class="text-sm font-bold text-gray-800">0</p>
                </div>
            </div>
            <div class="flex flex-col space-y-4">   
                <div class="flex flex-col">
                    <p class="text-sm text-blue-700 font-medium">ដំណើរការ</p>
                    <p id="inProgress" class="text-sm font-bold text-gray-800">0</p>
                </div>
                <div class="flex flex-col">
                    <p class="text-sm text-red-700 font-medium">បោះបង់</p>
                    <p id="canceled" class="text-sm font-bold text-gray-800">0</p>
                </div>
            </div>
        </div>
    </div>

    <div class="w-11/12 rounded-xl">
        <div class="flex flex-row w-full gap-2 justify-center mb-4">
            <button class="tab-button px-3 py-1 w-full bg-orange-100 text-gray-600 border border-orange-600 rounded-full text-sm focus:outline-none active" data-tab="all">រង់ចាំ</button>
            <button class="tab-button px-3 py-1 w-full bg-white text-gray-600 border border-blue-600 rounded-full text-sm focus:outline-none" data-tab="upcoming">ដំណើរការ</button>
            <button class="tab-button px-3 py-1 w-full bg-white text-gray-600 border border-green-600 rounded-full text-sm focus:outline-none" data-tab="due">បានបញ្ចប់</button>
            <button class="tab-button px-3 py-1 w-full bg-white text-gray-600 border border-red-600 rounded-full text-sm focus:outline-none" data-tab="completed">បោះបង់</button>
        </div>

        <div class="tab-content">
            <div class="tab-pane active" id="all"></div>
            <div class="tab-pane hidden" id="upcoming">
                <div class="bg-white rounded-lg mb-2 shadow-lg px-4 py-2 flex items-center justify-between w-full max-w-md">
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-tools text-3xl text-orange-500"></i>
                        <div>
                            <p class="text-black font-semibold text-sm font-khmer">#EZE253621 ទីតាំងថ្មី</p>
                            <p class="text-red-600 text-sm font-khmer">ថ្ងៃទី 20, 2025 13:50 PM</p>
                            <p class="text-blue-500 text-[10px] font-khmer">បង្គន់ស្ទះ</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-end justify-end">
                        <button class="bg-blue-500 text-sm text-black font-khmer font-semibold px-4 py-2 rounded-md hover:bg-yellow-600 transition">
                            រង់ចាំ
                        </button>
                        <p class="text-gray-500 text-[10px] font-khmer">ប៉ាន់ស្មាន : 3/3:38:11</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane hidden" id="due">
                <div class="bg-white rounded-lg mb-2 shadow-lg px-4 py-2 flex items-center justify-between w-full max-w-md">
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-tools text-3xl text-orange-500"></i>
                        <div>
                            <p class="text-black font-semibold text-sm font-khmer">#EZE253621 ទីតាំងថ្មី</p>
                            <p class="text-red-600 text-sm font-khmer">ថ្ងៃទី 20, 2025 13:50 PM</p>
                            <p class="text-blue-500 text-[10px] font-khmer">បង្គន់ស្ទះ</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-end justify-end">
                        <button class="bg-blue-500 text-sm text-black font-khmer font-semibold px-4 py-2 rounded-md hover:bg-yellow-600 transition">
                            រង់ចាំ
                        </button>
                        <p class="text-gray-500 text-[10px] font-khmer">ប៉ាន់ស្មាន : 3/3:38:11</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane hidden" id="completed">
                <div class="bg-white p-3 rounded-lg shadow mb-2 flex flex-col sm:flex-row justify-between items-start sm:items-center">
                    <div>
                        <h3 class="text-base font-semibold">#EZE253621 หน่วยงาน (Completed)</h3>
                        <p class="text-gray-500 text-xs">February 19, 2025 5:00:00 PM</p>
                        <p class="text-gray-700 text-sm">เสร็จสิ้น</p>
                    </div>
                    <button class="bg-yellow-400 text-black px-3 py-1 rounded-lg mt-2 sm:mt-0 text-sm">ดู</button>
                </div>
            </div>
        </div>
    </div>

    <button id="popupButton" class="fixed bottom-4 right-4 bg-yellow-400 text-black rounded-full w-14 h-14 flex items-center justify-center shadow-lg hover:bg-yellow-500 transition-colors">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
        </svg>
    </button>

    <div id="popup" class="hidden fixed inset-0 w-full h-full bg-gray-50 shadow-2xl p-4 sm:p-6 transform scale-0 transition-all duration-300 origin-center z-50 overflow-y-auto">
        <div class="max-w-md mx-auto">
            <div class="flex justify-between items-center mb-6">
                <button id="closePopup" class="text-gray-600 hover:text-gray-800 p-2 rounded-full hover:bg-gray-100 transition-colors">
                    <i class="fas fa-arrow-left text-xl"></i>
                </button>
                <h2 class="text-lg font-semibold text-gray-800">បង្កើតរបាយការណ៍</h2>
                <div class="w-8"></div>
            </div>
            <form class="space-y-5">
                <div>
                    <label for="topic" class="block text-sm font-medium text-gray-700 mb-1">ប្រធានបទ</label>
                    <input type="text" id="topic" name="topic" class="w-full px-3 py-2 bg-white border border-gray-200 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-[#ff8800] focus:border-[#ff8800] transition-colors text-sm" placeholder="បញ្ចូលប្រធានបទ">
                    <p class="mt-1 text-xs text-gray-500">បញ្ចូលជាអក្សរខ្មែរ</p>
                </div>
                <div>
                    <label for="details" class="block text-sm font-medium text-gray-700 mb-1">លម្អិត</label>
                    <textarea id="details" name="details" rows="3" class="w-full px-3 py-2 bg-white border border-gray-200 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-[#ff8800] focus:border-[#ff8800] transition-colors text-sm resize-y" placeholder="ពិពណ៌នាលម្អិត"></textarea>
                    <p class="mt-1 text-xs text-gray-500">បញ្ចូលជាអក្សរខ្មែរ</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">រូបភាព (មិនលើសពី៥)</label>
                    <div class="w-full p-4 bg-white border-2 border-dashed border-gray-200 rounded-lg hover:border-[#ff8800] transition-colors">
                        <div class="text-center">
                            <svg class="mx-auto h-10 w-10 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" />
                            </svg>
                            <p class="mt-1 text-xs text-gray-600">អូស ឬ ចុចដើម្បីបញ្ចូលរូបភាព</p>
                        </div>
                        <input type="file" class="hidden" multiple accept="image/*">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">វីដេអូ (តែមួយ)</label>
                    <div class="w-full p-4 bg-white border-2 border-dashed border-gray-200 rounded-lg hover:border-[#ff8800] transition-colors">
                        <div class="text-center">
                            <svg class="mx-auto h-10 w-10 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <p class="mt-1 text-xs text-gray-600">អូស ឬ ចុចដើម្បីបញ្ចូលវីដេអូ</p>
                        </div>
                        <input type="file" class="hidden" accept="video/*">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">សំឡេង</label>
                    <div class="w-full p-4 bg-white border-2 border-dashed border-gray-200 rounded-lg hover:border-[#ff8800] transition-colors">
                        <div id="voice-initial" class="text-center">
                            <svg class="mx-auto h-10 w-10 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                            </svg>
                            <button type="button" id="start-record" class="mt-2 px-3 py-1 bg-[#ff8800] text-white text-xs rounded-md hover:bg-[#e67b00] transition-colors">
                                ថតសំឡេង
                            </button>
                            <input type="file" class="hidden" accept="audio/*" id="voice-input">
                        </div>
                        <div id="voice-recording" class="text-center hidden">
                            <svg class="mx-auto h-10 w-10 text-red-500 animate-pulse" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                            </svg>
                            <p class="mt-1 text-xs text-gray-600">កំពុងថត...</p>
                            <button type="button" id="stop-record" class="mt-2 px-3 py-1 bg-red-500 text-white text-xs rounded-md hover:bg-red-600 transition-colors">
                                បញ្ឈប់ការថត
                            </button>
                        </div>
                        <div id="voice-preview" class="text-center hidden">
                            <audio id="voice-audio" controls class="w-full mb-2" playsinline></audio>
                            <div class="flex justify-center gap-2">
                                <button type="button" id="remove-voice" class="px-3 py-1 bg-red-500 text-white text-xs rounded-md hover:bg-red-600 transition-colors">
                                    លុបសំឡេង
                                </button>
                                <button type="button" id="record-again" class="px-3 py-1 bg-[#ff8800] text-white text-xs rounded-md hover:bg-[#e67b00] transition-colors">
                                    ថតម្តងទៀត
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-2">
                    <button type="submit" class="w-full px-4 py-2.5 bg-[#ff8800] text-white text-sm font-medium rounded-lg shadow-sm hover:bg-[#e67b00] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#ff8800] transition-colors">
                        របាយការណ៍ឥឡូវនេះ
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Popup toggle
        const popupButton = document.getElementById('popupButton');
        const popup = document.getElementById('popup');
        const closePopup = document.getElementById('closePopup');

        popupButton.addEventListener('click', () => {
            popup.classList.toggle('hidden');
            popup.classList.toggle('scale-0');
            popup.classList.toggle('scale-100');
        });

        closePopup.addEventListener('click', () => {
            popup.classList.add('hidden');
            popup.classList.add('scale-0');
            popup.classList.remove('scale-100');
        });

        document.addEventListener('click', (e) => {
            if (!popup.contains(e.target) && !popupButton.contains(e.target)) {
                popup.classList.add('hidden');
                popup.classList.add('scale-0');
                popup.classList.remove('scale-100');
            }
        });

        // Voice recording
        const voiceInitial = document.getElementById('voice-initial');
        const voiceRecording = document.getElementById('voice-recording');
        const voicePreview = document.getElementById('voice-preview');
        const startRecordBtn = document.getElementById('start-record');
        const stopRecordBtn = document.getElementById('stop-record');
        const removeVoiceBtn = document.getElementById('remove-voice');
        const recordAgainBtn = document.getElementById('record-again');
        const voiceAudio = document.getElementById('voice-audio');
        const voiceInput = document.getElementById('voice-input');

        let mediaRecorder;
        let audioChunks = [];

        if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
            async function requestMicrophonePermission() {
                try {
                    const permission = await navigator.permissions.query({ name: 'microphone' });
                    if (permission.state === 'denied') {
                        alert('សូមអនុញ្ញាតឲ្យប្រើមីក្រូហ្វូននៅក្នុងការកំណត់របស់ឧបករណ៍របស់អ្នក។');
                        return false;
                    } else if (permission.state === 'prompt') {
                        await navigator.mediaDevices.getUserMedia({ audio: true });
                    }
                    return true;
                } catch (err) {
                    console.error('Error requesting microphone permission:', err);
                    return false;
                }
            }

            startRecordBtn.addEventListener('click', async (e) => {
                e.preventDefault();
                const permissionGranted = await requestMicrophonePermission();
                if (!permissionGranted) return;

                try {
                    const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
                    const supportedMimeType = MediaRecorder.isTypeSupported('audio/mp4') ? 'audio/mp4' : 'audio/wav';
                    mediaRecorder = new MediaRecorder(stream, { mimeType: supportedMimeType });

                    mediaRecorder.ondataavailable = (event) => {
                        audioChunks.push(event.data);
                    };

                    mediaRecorder.onstop = () => {
                        const audioBlob = new Blob(audioChunks, { type: supportedMimeType });
                        const audioUrl = URL.createObjectURL(audioBlob);
                        voiceAudio.src = audioUrl;
                        voiceAudio.setAttribute('playsinline', '');

                        voiceRecording.classList.add('hidden');
                        voicePreview.classList.remove('hidden');

                        stream.getTracks().forEach(track => track.stop());
                        audioChunks = [];
                    };

                    audioChunks = [];
                    mediaRecorder.start();

                    voiceInitial.classList.add('hidden');
                    voiceRecording.classList.remove('hidden');
                } catch (err) {
                    console.error('Error recording audio:', err);
                    alert('មិនអាចថតសំឡេងបាន។ សូមពិនិត្យមីក្រូហ្វូនរបស់អ្នក។');
                }
            });

            stopRecordBtn.addEventListener('click', (e) => {
                e.preventDefault();
                if (mediaRecorder && mediaRecorder.state !== 'inactive') {
                    mediaRecorder.stop();
                }
            });

            removeVoiceBtn.addEventListener('click', (e) => {
                e.preventDefault();
                voiceAudio.src = '';
                voicePreview.classList.add('hidden');
                voiceInitial.classList.remove('hidden');
            });

            recordAgainBtn.addEventListener('click', (e) => {
                e.preventDefault();
                voiceAudio.src = '';
                voicePreview.classList.add('hidden');
                voiceInitial.classList.remove('hidden');
                startRecordBtn.click();
            });

            voiceInput.addEventListener('change', (e) => {
                const file = e.target.files[0];
                if (file) {
                    const audioUrl = URL.createObjectURL(file);
                    voiceAudio.src = audioUrl;
                    voiceInitial.classList.add('hidden');
                    voicePreview.classList.remove('hidden');
                }
            });
        } else {
            console.error('Browser does not support audio recording');
            startRecordBtn.classList.add('hidden');
        }

        // Tab switching
        const tabButtons = document.querySelectorAll('.tab-button');
        const tabPanes = document.querySelectorAll('.tab-pane');

        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                tabButtons.forEach(btn => {
                    btn.classList.remove('active');
                    btn.classList.remove('bg-orange-100', 'bg-blue-100', 'bg-green-100', 'bg-red-100');
                    btn.classList.add('bg-white');
                });

                button.classList.add('active');
                const tabId = button.getAttribute('data-tab');

                if (button.classList.contains('border-orange-600')) {
                    button.classList.add('bg-orange-100');
                } else if (button.classList.contains('border-blue-600')) {
                    button.classList.add('bg-blue-100');
                } else if (button.classList.contains('border-green-600')) {
                    button.classList.add('bg-green-100');
                } else if (button.classList.contains('border-red-600')) {
                    button.classList.add('bg-red-100');
                }

                tabPanes.forEach(pane => pane.classList.add('hidden'));
                document.getElementById(tabId).classList.remove('hidden');
            });
        });

        // Chart initialization
        function initializeChart(canvasId, data) {
            const ctx = document.getElementById(canvasId).getContext('2d');
            return new Chart(ctx, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [data.pending, data.completed, data.inProgress, data.canceled],
                        backgroundColor: ['#ff8800', '#00FF00', '#0000FF', '#FF0000'],
                        borderWidth: 0,
                        borderRadius: 0,
                        cutout: '70%'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { display: false },
                        tooltip: { enabled: false }
                    }
                }
            });
        }

        const mainChartData = {
            pending: 100,
            completed: 20,
            inProgress: 30,
            canceled: 40
        };
        document.getElementById('pending').textContent = mainChartData.pending;
        document.getElementById('completed').textContent = mainChartData.completed;
        document.getElementById('inProgress').textContent = mainChartData.inProgress;
        document.getElementById('canceled').textContent = mainChartData.canceled;
        initializeChart('progressChart', mainChartData);

        // Loop for tab content
        let container = document.getElementById("all");
        let upcoming = document.getElementById("upcoming");
        let content = '';
        let upcomings = '';

        for (let i = 0; i < 20; i++) {
            content += `
                <div class="bg-white rounded-lg mb-2 shadow-lg px-4 py-2 flex items-center justify-between w-full max-w-md">
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-tools text-3xl text-orange-500"></i>
                        <div>
                            <p class="text-black font-semibold text-sm font-khmer">#EZE253621 ទីតាំងថ្មី</p>
                            <p class="text-gray-600 text-[12px] font-khmer">01/12/2025 13:50 PM</p>
                            <p class="text-blue-500 text-sm font-khmer">បង្គន់ស្ទះ</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-end justify-end">
                        <button class="bg-yellow-500 text-sm text-black font-khmer font-semibold px-6 py-1 rounded-md hover:bg-yellow-600 transition">
                            រង់ចាំ
                        </button>
                        <p class="text-red-500 text-sm font-khmer">បានទទួល</p>
                    </div>
                </div>
            `;
            upcomings += `
                <div class="bg-white rounded-lg mb-2 shadow-lg px-4 py-2 flex items-center justify-between w-full max-w-md">
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-tools text-3xl text-orange-500"></i>
                        <div>
                            <p class="text-black font-semibold text-sm font-khmer">#EZE253621 ទីតាំងថ្មី</p>
                            <p class="text-gray-600 text-[12px] font-khmer">01/12/2025 13:50 PM</p>
                            <p class="text-blue-500 text-sm font-khmer">បង្គន់ស្ទះ</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-end justify-end">
                        <button class="bg-blue-500 text-sm text-black font-khmer font-semibold px-6 py-1 rounded-md hover:bg-yellow-600 transition">
                            រង់ចាំ
                        </button>
                        <p class="text-red-500 text-sm font-khmer">បានទទួល</p>
                    </div>
                </div>
            `;
        }

        container.innerHTML = content;
        upcoming.innerHTML = upcomings;
    </script>
</body>
</html>