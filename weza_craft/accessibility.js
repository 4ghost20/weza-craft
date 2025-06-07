let screenReaderEnabled = false;

function speakText(text) {
    if ('speechSynthesis' in window) {
        // Cancel any ongoing speech before starting new one
        window.speechSynthesis.cancel();

        const utterance = new SpeechSynthesisUtterance(text);

        // Don't fix the voice — let browser choose best default voice
        // utterance.lang = 'en-GB'; // Optional: you can comment this out to use default

        // Add event listeners for debugging
        utterance.onstart = () => console.log('Speech started');
        utterance.onend = () => console.log('Speech ended');
        utterance.onerror = (e) => console.error('Speech error:', e);

        window.speechSynthesis.speak(utterance);
    } else {
        console.warn('Speech Synthesis not supported');
    }
}

function toggleScreenReader() {
    screenReaderEnabled = document.getElementById('screenReaderToggle').checked;

    if (screenReaderEnabled) {
        speakText("Screen reader mode enabled. Press R to read page content.");
    } else {
        speakText("Screen reader mode disabled.");
        window.speechSynthesis.cancel();
    }
}

// Listen for keydown 'R' only when screen reader mode is on
document.addEventListener('keydown', function (e) {
    if (screenReaderEnabled && e.key.toLowerCase() === 'r') {
        // Grab visible text only
        let visibleText = getVisibleText(document.body);
        if (visibleText.length === 0) {
            speakText("No visible text found on the page.");
        } else {
            speakText(visibleText.substring(0, 5000)); // limit length to 5000 chars
        }
    }
});

// Helper function to extract visible text only (exclude hidden elements and scripts/styles)
function getVisibleText(element) {
    let text = '';

    for (const node of element.childNodes) {
        // Skip hidden elements
        if (node.nodeType === Node.ELEMENT_NODE) {
            const style = window.getComputedStyle(node);
            if (style && (style.display === 'none' || style.visibility === 'hidden' || style.opacity === '0')) {
                continue;
            }
            if (node.tagName === 'SCRIPT' || node.tagName === 'STYLE' || node.tagName === 'NOSCRIPT') {
                continue;
            }
            text += getVisibleText(node);
        } else if (node.nodeType === Node.TEXT_NODE) {
            // Append trimmed text if it has any
            const trimmed = node.textContent.trim();
            if (trimmed.length > 0) {
                text += trimmed + ' ';
            }
        }
    }
    return text.trim();
}
