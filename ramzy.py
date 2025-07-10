import os
import shutil

def organize_files(directory):
  for filename in os.listdir(directory):
    if filename.endswith(('.jpg', '.png')):
      shutil.move(filename, 'images/')
    elif filename.endswith('.pdf'):
      shutil.move(filename, 'documents/')
