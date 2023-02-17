from googletrans import Translator

translator = Translator()

chinese_text = "你好，世界！"

# Translate to English
english_translation = translator.translate(chinese_text, dest='en').text
print("English translation:", english_translation)

# Translate to Japanese
japanese_translation = translator.translate(chinese_text, dest='ja').text
print("Japanese translation:", japanese_translation)

# Translate to Korean
korean_translation = translator.translate(chinese_text, dest='ko').text
print("Korean translation:", korean_translation)