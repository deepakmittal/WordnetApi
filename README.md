# WordnetApi
A php library that accesses wordnet (https://wordnet.princeton.edu/) to provide synonyms of words.

# Example

echo WordnetApi::_new("happy")->getRandomSynonym();
