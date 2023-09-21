import sys
import spacy

# For english we used en_core_web_sm
nlp = spacy.load("en_core_web_sm")

def extract_skills(resume_text):
    doc = nlp(resume_text)

    skills = []

    skill_keywords = ["skill", "skills", "proficiency", "experience","technology", "Expertise" , "expert"]

    for sentence in doc.sents:
        if any(keyword in sentence.text.lower() for keyword in skill_keywords):
            for token in sentence:
                # NN for Noun
                # VB for Verb 
                # JJ for Adjective 
                # RB for Adverb 
                if "NN" in token.tag_:
                    skills.append(token.text)

    return skills

if __name__ == "__main__":
    
    # sys returns data from php
    resume_text = sys.argv[1] 

    extracted_skills = extract_skills(resume_text)
    print("Extracted Skills for PHP File:", extracted_skills)
