#!/usr/bin/python                                                  
from PIL import Image                                              
import os, sys                       

path = input("dir path:")
scale = 0.5
dirs = os.listdir( path )                                       

def resize():
    for item in dirs:
        if os.path.isfile(path+item):
            im = Image.open(path+item)
            width, height = im.size
            f, e = os.path.splitext(path+item)
            imResize = im.resize((width*scale,height*scale), Image.ANTIALIAS)
            imResize.save(f+'.png', 'png', quality=100)

resize()