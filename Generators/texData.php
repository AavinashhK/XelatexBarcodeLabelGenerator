<?php

$texData = "\documentclass{article}
\usepackage{helvet}
\usepackage{pdflscape}
\usepackage{graphicx}
\usepackage{pstricks} 
\usepackage[dvips]{geometry} 
\usepackage{pst-barcode} 
\geometry{papersize={11in,8.5in},total={11in,8.5in}} 
\renewcommand{\\familydefault}{\sfdefault}
\begin{document}
\begin{landscape}
\thispagestyle{empty}
\begin{pspicture}(10.75in,8.5in)

\psbarcode[rotate=90,transx=0.45in,transy=0.80in]{".$prefixBar.$valArray[71]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=1.27in,transy=0.80in]{".$prefixBar.$valArray[63]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=2.09in,transy=0.80in]{".$prefixBar.$valArray[55]."}{height=0.151 width=0.625}{code128}
\psbarcode[rotate=90,transx=2.91in,transy=0.80in]{".$prefixBar.$valArray[47]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=3.73in,transy=0.80in]{".$prefixBar.$valArray[39]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=4.55in,transy=0.80in]{".$prefixBar.$valArray[31]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=5.37in,transy=0.80in]{".$prefixBar.$valArray[23]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=6.19in,transy=0.80in]{".$prefixBar.$valArray[15]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=7.01in,transy=0.80in]{".$prefixBar.$valArray[7]."}{height=0.151 width=0.625}{code128} 


\\rput[bl]{-90}(0.20in,1.40in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[71]."}
\\rput[bl]{-90}(1.02in,1.40in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[63]."}
\\rput[bl]{-90}(1.84in,1.40in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[55]."}
\\rput[bl]{-90}(2.66in,1.40in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[47]."}
\\rput[bl]{-90}(3.48in,1.40in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[39]."}
\\rput[bl]{-90}(4.30in,1.40in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[31]."}
\\rput[bl]{-90}(5.12in,1.40in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[23]."}
\\rput[bl]{-90}(5.94in,1.40in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[15]."}
\\rput[bl]{-90}(6.76in,1.40in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[7]."}


\\rput[bl]{-90}(0.67in,1.45in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(1.49in,1.45in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(2.31in,1.45in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(3.13in,1.45in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(3.95in,1.45in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(4.77in,1.45in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(5.59in,1.45in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(6.41in,1.45in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(7.23in,1.45in){\\fontsize{5}{5}\selectfont Your Brand Name}



\\rput[bl]{-90}(0.60in,1.45in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(1.42in,1.45in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(2.24in,1.45in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(3.06in,1.45in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(3.88in,1.45in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(4.70in,1.45in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(5.52in,1.45in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(6.34in,1.45in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(7.16in,1.45in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}


\\rput[bl]{-90}(0.53in,1.45in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(1.35in,1.45in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(2.17in,1.45in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(2.99in,1.45in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(3.81in,1.45in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(4.63in,1.45in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(5.45in,1.45in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(6.27in,1.45in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(7.09in,1.45in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}


\\rput[bl]{-90}(0.55in,0.75in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(1.37in,0.75in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(2.19in,0.75in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(3.01in,0.75in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(3.83in,0.75in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(4.65in,0.75in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(5.47in,0.75in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(6.29in,0.75in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(7.11in,0.75in){\\fontsize{5}{5}\selectfont Model No}


\\rput[bl]{-90}(0.48in,0.75in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(1.30in,0.75in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(2.12in,0.75in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(2.94in,0.75in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(3.76in,0.75in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(4.58in,0.75in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(5.40in,0.75in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(6.22in,0.75in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(7.04in,0.75in){\\fontsize{5}{5}\selectfont MPOD2-C}


\\rput[bl]{-90}(0.30in,0.75in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(1.12in,0.75in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(1.94in,0.75in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(2.76in,0.75in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(3.58in,0.75in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(4.40in,0.75in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(5.22in,0.75in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(6.04in,0.75in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(6.86in,0.75in){\\fontsize{6}{6}\selectfont MADE IN}


\\rput[bl]{-90}(0.20in,0.75in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(1.02in,0.75in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(1.84in,0.75in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(2.06in,0.75in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(3.48in,0.75in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(4.30in,0.75in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(5.12in,0.75in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(5.94in,0.75in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(6.76in,0.75in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}

\psbarcode[rotate=90,transx=0.45in,transy=2.1in]{".$prefixBar.$valArray[70]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=1.27in,transy=2.1in]{".$prefixBar.$valArray[62]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=2.09in,transy=2.1in]{".$prefixBar.$valArray[54]."}{height=0.151 width=0.625}{code128}
\psbarcode[rotate=90,transx=2.91in,transy=2.1in]{".$prefixBar.$valArray[46]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=3.73in,transy=2.1in]{".$prefixBar.$valArray[38]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=4.55in,transy=2.1in]{".$prefixBar.$valArray[30]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=5.37in,transy=2.1in]{".$prefixBar.$valArray[22]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=6.19in,transy=2.1in]{".$prefixBar.$valArray[14]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=7.01in,transy=2.1in]{".$prefixBar.$valArray[6]."}{height=0.151 width=0.625}{code128} 


\\rput[bl]{-90}(0.20in,2.70in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[70]."}
\\rput[bl]{-90}(1.02in,2.70in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[62]."}
\\rput[bl]{-90}(1.84in,2.70in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[54]."}
\\rput[bl]{-90}(2.66in,2.70in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[46]."}
\\rput[bl]{-90}(3.48in,2.70in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[38]."}
\\rput[bl]{-90}(4.30in,2.70in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[30]."}
\\rput[bl]{-90}(5.12in,2.70in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[22]."}
\\rput[bl]{-90}(5.94in,2.70in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[14]."}
\\rput[bl]{-90}(6.76in,2.70in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[6]."}


\\rput[bl]{-90}(0.67in,2.75in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(1.49in,2.75in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(2.31in,2.75in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(3.13in,2.75in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(3.95in,2.75in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(4.77in,2.75in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(5.59in,2.75in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(6.41in,2.75in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(7.23in,2.75in){\\fontsize{5}{5}\selectfont Your Brand Name}


\\rput[bl]{-90}(0.60in,2.75in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(1.42in,2.75in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(2.24in,2.75in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(3.06in,2.75in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(3.88in,2.75in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(4.70in,2.75in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(5.52in,2.75in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(6.34in,2.75in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(7.16in,2.75in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}


\\rput[bl]{-90}(0.53in,2.75in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(1.35in,2.75in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(2.17in,2.75in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(2.99in,2.75in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(3.81in,2.75in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(4.63in,2.75in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(5.45in,2.75in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(6.27in,2.75in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(7.09in,2.75in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}


\\rput[bl]{-90}(0.55in,2.05in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(1.37in,2.05in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(2.19in,2.05in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(3.01in,2.05in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(3.83in,2.05in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(4.65in,2.05in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(5.47in,2.05in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(6.29in,2.05in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(7.11in,2.05in){\\fontsize{5}{5}\selectfont Model No}


\\rput[bl]{-90}(0.48in,2.05in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(1.30in,2.05in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(2.12in,2.05in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(2.94in,2.05in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(3.76in,2.05in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(4.58in,2.05in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(5.40in,2.05in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(6.22in,2.05in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(7.04in,2.05in){\\fontsize{5}{5}\selectfont MPOD2-C}


\\rput[bl]{-90}(0.30in,2.05in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(1.12in,2.05in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(1.94in,2.05in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(2.76in,2.05in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(3.58in,2.05in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(4.40in,2.05in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(5.22in,2.05in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(6.04in,2.05in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(6.86in,2.05in){\\fontsize{6}{6}\selectfont MADE IN}


\\rput[bl]{-90}(0.20in,2.05in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(1.02in,2.05in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(1.84in,2.05in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(2.66in,2.05in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(3.48in,2.05in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(4.30in,2.05in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(5.12in,2.05in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(5.94in,2.05in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(6.76in,2.05in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}


\psbarcode[rotate=90,transx=0.45in,transy=3.45in]{".$prefixBar.$valArray[69]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=1.27in,transy=3.45in]{".$prefixBar.$valArray[61]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=2.09in,transy=3.45in]{".$prefixBar.$valArray[53]."}{height=0.151 width=0.625}{code128}
\psbarcode[rotate=90,transx=2.91in,transy=3.45in]{".$prefixBar.$valArray[45]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=3.73in,transy=3.45in]{".$prefixBar.$valArray[37]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=4.55in,transy=3.45in]{".$prefixBar.$valArray[29]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=5.37in,transy=3.45in]{".$prefixBar.$valArray[21]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=6.19in,transy=3.45in]{".$prefixBar.$valArray[13]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=7.01in,transy=3.45in]{".$prefixBar.$valArray[5]."}{height=0.151 width=0.625}{code128}


\\rput[bl]{-90}(0.20in,4.0in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[69]."}
\\rput[bl]{-90}(1.02in,4.0in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[61]."}
\\rput[bl]{-90}(1.84in,4.0in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[53]."}
\\rput[bl]{-90}(2.66in,4.0in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[45]."}
\\rput[bl]{-90}(3.48in,4.0in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[37]."}
\\rput[bl]{-90}(4.30in,4.0in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[29]."}
\\rput[bl]{-90}(5.12in,4.0in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[21]."}
\\rput[bl]{-90}(5.94in,4.0in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[13]."}
\\rput[bl]{-90}(6.76in,4.0in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[5]."}


\\rput[bl]{-90}(0.67in,4.1in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(1.49in,4.1in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(2.31in,4.1in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(3.13in,4.1in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(3.95in,4.1in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(4.77in,4.1in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(5.59in,4.1in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(6.41in,4.1in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(7.23in,4.1in){\\fontsize{5}{5}\selectfont Your Brand Name}



\\rput[bl]{-90}(0.60in,4.1in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(1.42in,4.1in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(2.24in,4.1in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(3.06in,4.1in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(3.88in,4.1in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(4.70in,4.1in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(5.52in,4.1in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(6.34in,4.1in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(7.16in,4.1in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}


\\rput[bl]{-90}(0.53in,4.1in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(1.35in,4.1in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(2.17in,4.1in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(2.99in,4.1in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(3.81in,4.1in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(4.63in,4.1in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(5.45in,4.1in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(6.27in,4.1in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(7.09in,4.1in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}


\\rput[bl]{-90}(0.55in,3.40in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(1.37in,3.40in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(2.19in,3.40in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(3.01in,3.40in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(3.83in,3.40in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(4.65in,3.40in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(5.47in,3.40in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(6.29in,3.40in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(7.11in,3.40in){\\fontsize{5}{5}\selectfont Model No}


\\rput[bl]{-90}(0.48in,3.40in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(1.30in,3.40in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(2.12in,3.40in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(2.94in,3.40in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(3.76in,3.40in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(4.58in,3.40in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(5.40in,3.40in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(6.22in,3.40in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(7.04in,3.40in){\\fontsize{5}{5}\selectfont MPOD2-C}


\\rput[bl]{-90}(0.30in,3.40in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(1.12in,3.40in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(1.94in,3.40in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(2.76in,3.40in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(3.58in,3.40in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(4.40in,3.40in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(5.22in,3.40in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(6.04in,3.40in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(6.86in,3.40in){\\fontsize{6}{6}\selectfont MADE IN}



\\rput[bl]{-90}(0.20in,3.40in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(1.02in,3.40in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(1.84in,3.40in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(2.66in,3.40in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(3.48in,3.40in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(4.30in,3.40in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(5.12in,3.40in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(5.94in,3.40in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(6.76in,3.40in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}


\psbarcode[rotate=90,transx=0.45in,transy=4.75in]{".$prefixBar.$valArray[68]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=1.27in,transy=4.75in]{".$prefixBar.$valArray[60]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=2.09in,transy=4.75in]{".$prefixBar.$valArray[52]."}{height=0.151 width=0.625}{code128}
\psbarcode[rotate=90,transx=2.91in,transy=4.75in]{".$prefixBar.$valArray[44]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=3.73in,transy=4.75in]{".$prefixBar.$valArray[36]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=4.55in,transy=4.75in]{".$prefixBar.$valArray[28]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=5.37in,transy=4.75in]{".$prefixBar.$valArray[20]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=6.19in,transy=4.75in]{".$prefixBar.$valArray[12]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=7.01in,transy=4.75in]{".$prefixBar.$valArray[4]."}{height=0.151 width=0.625}{code128} 

\\rput[bl]{-90}(0.20in,5.35in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[68]."}
\\rput[bl]{-90}(1.02in,5.35in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[60]."}
\\rput[bl]{-90}(1.84in,5.35in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[52]."}
\\rput[bl]{-90}(2.66in,5.35in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[44]."}
\\rput[bl]{-90}(3.48in,5.35in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[36]."}
\\rput[bl]{-90}(4.30in,5.35in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[28]."}
\\rput[bl]{-90}(5.12in,5.35in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[20]."}
\\rput[bl]{-90}(5.94in,5.35in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[12]."}
\\rput[bl]{-90}(6.76in,5.35in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[4]."}


\\rput[bl]{-90}(0.67in,5.4in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(1.49in,5.4in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(2.31in,5.4in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(3.13in,5.4in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(3.95in,5.4in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(4.77in,5.4in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(5.59in,5.4in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(6.41in,5.4in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(7.23in,5.4in){\\fontsize{5}{5}\selectfont Your Brand Name}


\\rput[bl]{-90}(0.60in,5.4in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(1.42in,5.4in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(2.24in,5.4in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(3.06in,5.4in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(3.88in,5.4in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(4.70in,5.4in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(5.52in,5.4in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(6.34in,5.4in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(7.16in,5.4in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}


\\rput[bl]{-90}(0.53in,5.4in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(1.35in,5.4in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(2.17in,5.4in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(2.99in,5.4in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(3.81in,5.4in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(4.63in,5.4in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(5.45in,5.4in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(6.27in,5.4in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(7.09in,5.4in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}


\\rput[bl]{-90}(0.55in,4.70in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(1.37in,4.70in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(2.19in,4.70in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(3.01in,4.70in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(3.83in,4.70in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(4.65in,4.70in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(5.47in,4.70in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(6.29in,4.70in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(7.11in,4.70in){\\fontsize{5}{5}\selectfont Model No}

%MP MPOD ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
\\rput[bl]{-90}(0.48in,4.70in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(1.30in,4.70in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(2.12in,4.70in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(2.94in,4.70in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(3.76in,4.70in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(4.58in,4.70in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(5.40in,4.70in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(6.22in,4.70in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(7.04in,4.70in){\\fontsize{5}{5}\selectfont MPOD2-C}


%MADE IN ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
\\rput[bl]{-90}(0.30in,4.70in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(1.12in,4.70in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(1.94in,4.70in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(2.76in,4.70in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(3.58in,4.70in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(4.40in,4.70in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(5.22in,4.70in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(6.04in,4.70in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(6.86in,4.70in){\\fontsize{6}{6}\selectfont MADE IN}

%USA ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

\\rput[bl]{-90}(0.20in,4.70in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(1.02in,4.70in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(1.84in,4.70in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(2.66in,4.70in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(3.48in,4.70in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(4.30in,4.70in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(5.12in,4.70in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(5.94in,4.70in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(6.76in,4.70in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}


%BARCODES +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
%7
\psbarcode[rotate=90,transx=0.45in,transy=6.1in]{".$prefixBar.$valArray[67]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=1.27in,transy=6.1in]{".$prefixBar.$valArray[59]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=2.09in,transy=6.1in]{".$prefixBar.$valArray[51]."}{height=0.151 width=0.625}{code128}
\psbarcode[rotate=90,transx=2.91in,transy=6.1in]{".$prefixBar.$valArray[43]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=3.73in,transy=6.1in]{".$prefixBar.$valArray[35]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=4.55in,transy=6.1in]{".$prefixBar.$valArray[27]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=5.37in,transy=6.1in]{".$prefixBar.$valArray[19]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=6.19in,transy=6.1in]{".$prefixBar.$valArray[11]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=7.01in,transy=6.1in]{".$prefixBar.$valArray[3]."}{height=0.151 width=0.625}{code128} 



%WCP- TEXT +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
%7th row
\\rput[bl]{-90}(0.20in,6.70in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[67]."}
\\rput[bl]{-90}(1.02in,6.70in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[59]."}
\\rput[bl]{-90}(1.84in,6.70in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[51]."}
\\rput[bl]{-90}(2.66in,6.70in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[43]."}
\\rput[bl]{-90}(3.48in,6.70in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[35]."}
\\rput[bl]{-90}(4.30in,6.70in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[27]."}
\\rput[bl]{-90}(5.12in,6.70in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[19]."}
\\rput[bl]{-90}(5.94in,6.70in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[11]."}
\\rput[bl]{-90}(6.76in,6.70in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[3]."}



% BRIGHT STAR TEXT ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

%7th row
\\rput[bl]{-90}(0.67in,6.75in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(1.49in,6.75in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(2.31in,6.75in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(3.13in,6.75in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(3.95in,6.75in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(4.77in,6.75in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(5.59in,6.75in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(6.41in,6.75in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(7.23in,6.75in){\\fontsize{5}{5}\selectfont Your Brand Name}

%START FCC +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
%8
\\rput[bl]{-90}(0.60in,6.75in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(1.42in,6.75in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(2.24in,6.75in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(3.06in,6.75in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(3.88in,6.75in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(4.70in,6.75in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(5.52in,6.75in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(6.34in,6.75in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(7.16in,6.75in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}


%START IC ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
\\rput[bl]{-90}(0.53in,6.75in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(1.35in,6.75in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(2.17in,6.75in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(2.99in,6.75in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(3.81in,6.75in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(4.63in,6.75in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(5.45in,6.75in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(6.27in,6.75in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(7.09in,6.75in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}


%MODEL ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
\\rput[bl]{-90}(0.55in,6.05in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(1.37in,6.05in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(2.19in,6.05in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(3.01in,6.05in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(3.83in,6.05in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(4.65in,6.05in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(5.47in,6.05in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(6.29in,6.05in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(7.11in,6.05in){\\fontsize{5}{5}\selectfont Model No}

%MP MPOD ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
\\rput[bl]{-90}(0.48in,6.05in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(1.30in,6.05in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(2.12in,6.05in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(2.94in,6.05in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(3.76in,6.05in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(4.58in,6.05in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(5.40in,6.05in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(6.22in,6.05in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(7.04in,6.05in){\\fontsize{5}{5}\selectfont MPOD2-C}


%MADE IN ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
\\rput[bl]{-90}(0.30in,6.05in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(1.12in,6.05in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(1.94in,6.05in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(2.76in,6.05in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(3.58in,6.05in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(4.40in,6.05in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(5.22in,6.05in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(6.04in,6.05in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(6.86in,6.05in){\\fontsize{6}{6}\selectfont MADE IN}

%USA ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
\\rput[bl]{-90}(0.20in,6.05in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(1.02in,6.05in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(1.84in,6.05in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(2.66in,6.05in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(3.48in,6.05in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(4.30in,6.05in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(5.12in,6.05in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(5.94in,6.05in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(6.76in,6.05in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}


%BARCODES +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
%8
\psbarcode[rotate=90,transx=0.45in,transy=7.43in]{".$prefixBar.$valArray[66]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=1.27in,transy=7.43in]{".$prefixBar.$valArray[58]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=2.09in,transy=7.43in]{".$prefixBar.$valArray[50]."}{height=0.151 width=0.625}{code128}
\psbarcode[rotate=90,transx=2.91in,transy=7.43in]{".$prefixBar.$valArray[42]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=3.73in,transy=7.43in]{".$prefixBar.$valArray[34]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=4.55in,transy=7.43in]{".$prefixBar.$valArray[26]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=5.37in,transy=7.43in]{".$prefixBar.$valArray[18]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=6.19in,transy=7.43in]{".$prefixBar.$valArray[10]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=7.01in,transy=7.43in]{".$prefixBar.$valArray[2]."}{height=0.151 width=0.625}{code128} 



%WCP- TEXT +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


%8th row
\\rput[bl]{-90}(0.20in,8.0in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[66]."}
\\rput[bl]{-90}(1.02in,8.0in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[58]."}
\\rput[bl]{-90}(1.84in,8.0in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[50]."}
\\rput[bl]{-90}(2.66in,8.0in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[42]."}
\\rput[bl]{-90}(3.48in,8.0in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[34]."}
\\rput[bl]{-90}(4.30in,8.0in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[26]."}
\\rput[bl]{-90}(5.12in,8.0in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[18]."}
\\rput[bl]{-90}(5.94in,8.0in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[10]."}
\\rput[bl]{-90}(6.76in,8.0in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[2]."}



% BRIGHT STAR TEXT ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

%8th row
\\rput[bl]{-90}(0.67in,8.1in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(1.49in,8.1in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(2.31in,8.1in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(3.13in,8.1in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(3.95in,8.1in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(4.77in,8.1in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(5.59in,8.1in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(6.41in,8.1in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(7.23in,8.1in){\\fontsize{5}{5}\selectfont Your Brand Name}

%START FCC +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
%8
\\rput[bl]{-90}(0.60in,8.1in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(1.42in,8.1in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(2.24in,8.1in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(3.06in,8.1in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(3.88in,8.1in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(4.70in,8.1in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(5.52in,8.1in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(6.34in,8.1in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(7.16in,8.1in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}


%START IC ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
%8
\\rput[bl]{-90}(0.53in,8.1in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(1.35in,8.1in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(2.17in,8.1in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(2.99in,8.1in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(3.81in,8.1in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(4.63in,8.1in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(5.45in,8.1in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(6.27in,8.1in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(7.09in,8.1in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}



%MODEL ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
%8
\\rput[bl]{-90}(0.55in,7.35in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(1.37in,7.35in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(2.19in,7.35in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(3.01in,7.35in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(3.83in,7.35in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(4.65in,7.35in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(5.47in,7.35in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(6.29in,7.35in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(7.11in,7.35in){\\fontsize{5}{5}\selectfont Model No}


%MP MPOD ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
%8
\\rput[bl]{-90}(0.48in,7.35in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(1.30in,7.35in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(2.12in,7.35in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(2.94in,7.35in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(3.76in,7.35in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(4.58in,7.35in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(5.40in,7.35in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(6.22in,7.35in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(7.04in,7.35in){\\fontsize{5}{5}\selectfont MPOD2-C}

%MADE IN ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
%8
\\rput[bl]{-90}(0.30in,7.35in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(1.12in,7.35in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(1.94in,7.35in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(2.76in,7.35in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(3.58in,7.35in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(4.40in,7.35in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(5.22in,7.35in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(6.04in,7.35in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(6.86in,7.35in){\\fontsize{6}{6}\selectfont MADE IN}

%USA ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
%8
\\rput[bl]{-90}(0.20in,7.35in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(1.02in,7.35in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(1.84in,7.35in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(2.66in,7.35in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(3.48in,7.35in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(4.30in,7.35in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(5.12in,7.35in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(5.94in,7.35in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(6.76in,7.35in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}

%777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777
%BARCODES +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
% bar code ka x difference .80 hai ?
%8
\psbarcode[rotate=90,transx=0.45in,transy=8.75in]{".$prefixBar.$valArray[65]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=1.27in,transy=8.75in]{".$prefixBar.$valArray[57]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=2.09in,transy=8.75in]{".$prefixBar.$valArray[49]."}{height=0.151 width=0.625}{code128}
\psbarcode[rotate=90,transx=2.91in,transy=8.75in]{".$prefixBar.$valArray[41]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=3.73in,transy=8.75in]{".$prefixBar.$valArray[33]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=4.55in,transy=8.75in]{".$prefixBar.$valArray[25]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=5.37in,transy=8.75in]{".$prefixBar.$valArray[17]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=6.19in,transy=8.75in]{".$prefixBar.$valArray[9]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=7.01in,transy=8.75in]{".$prefixBar.$valArray[1]."}{height=0.151 width=0.625}{code128} 



%WCP- TEXT +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


%8th row
\\rput[bl]{-90}(0.20in,9.3in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[65]."}
\\rput[bl]{-90}(1.02in,9.3in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[57]."}
\\rput[bl]{-90}(1.84in,9.3in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[49]."}
\\rput[bl]{-90}(2.66in,9.3in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[41]."}
\\rput[bl]{-90}(3.48in,9.3in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[33]."}
\\rput[bl]{-90}(4.30in,9.3in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[25]."}
\\rput[bl]{-90}(5.12in,9.3in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[17]."}
\\rput[bl]{-90}(5.94in,9.3in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[9]."}
\\rput[bl]{-90}(6.76in,9.3in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[1]."}



% BRIGHT STAR TEXT ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

%8th row
\\rput[bl]{-90}(0.67in,9.4in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(1.49in,9.4in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(2.31in,9.4in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(3.13in,9.4in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(3.95in,9.4in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(4.77in,9.4in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(5.59in,9.4in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(6.41in,9.4in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(7.23in,9.4in){\\fontsize{5}{5}\selectfont Your Brand Name}

%START FCC +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
%8
\\rput[bl]{-90}(0.60in,9.4in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(1.42in,9.4in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(2.24in,9.4in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(3.06in,9.4in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(3.88in,9.4in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(4.70in,9.4in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(5.52in,9.4in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(6.34in,9.4in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(7.16in,9.4in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}


%START IC ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
%8
\\rput[bl]{-90}(0.53in,9.4in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(1.35in,9.4in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(2.17in,9.4in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(2.99in,9.4in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(3.81in,9.4in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(4.63in,9.4in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(5.45in,9.4in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(6.27in,9.4in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(7.09in,9.4in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}



%MODEL ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
%8
\\rput[bl]{-90}(0.55in,8.65in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(1.37in,8.65in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(2.19in,8.65in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(3.01in,8.65in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(3.83in,8.65in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(4.65in,8.65in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(5.47in,8.65in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(6.29in,8.65in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(7.11in,8.65in){\\fontsize{5}{5}\selectfont Model No}


%MP MPOD ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
%8
\\rput[bl]{-90}(0.48in,8.65in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(1.30in,8.65in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(2.12in,8.65in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(2.94in,8.65in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(3.76in,8.65in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(4.58in,8.65in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(5.40in,8.65in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(6.22in,8.65in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(7.04in,8.65in){\\fontsize{5}{5}\selectfont MPOD2-C}

%MADE IN ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
%8
\\rput[bl]{-90}(0.30in,8.65in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(1.12in,8.65in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(1.94in,8.65in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(2.76in,8.65in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(3.58in,8.65in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(4.40in,8.65in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(5.22in,8.65in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(6.04in,8.65in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(6.86in,8.65in){\\fontsize{6}{6}\selectfont MADE IN}

%USA ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
%8
\\rput[bl]{-90}(0.20in,8.65in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(1.02in,8.65in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(1.84in,8.65in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(2.66in,8.65in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(3.48in,8.65in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(4.30in,8.65in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(5.12in,8.65in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(5.94in,8.65in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(6.76in,8.65in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}


%888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888
%BARCODES +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
% bar code ka x difference .80 hai ?
%8
\psbarcode[rotate=90,transx=0.45in,transy=10.1in]{".$prefixBar.$valArray[64]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=1.27in,transy=10.1in]{".$prefixBar.$valArray[56]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=2.09in,transy=10.1in]{".$prefixBar.$valArray[48]."}{height=0.151 width=0.625}{code128}
\psbarcode[rotate=90,transx=2.91in,transy=10.1in]{".$prefixBar.$valArray[40]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=3.73in,transy=10.1in]{".$prefixBar.$valArray[32]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=4.55in,transy=10.1in]{".$prefixBar.$valArray[24]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=5.37in,transy=10.1in]{".$prefixBar.$valArray[16]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=6.19in,transy=10.1in]{".$prefixBar.$valArray[8]."}{height=0.151 width=0.625}{code128} 
\psbarcode[rotate=90,transx=7.01in,transy=10.1in]{".$prefixBar.$valArray[0]."}{height=0.151 width=0.625}{code128} 



%WCP- TEXT +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


%8th row
\\rput[bl]{-90}(0.20in,10.65in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[64]."}
\\rput[bl]{-90}(1.02in,10.65in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[56]."}
\\rput[bl]{-90}(1.84in,10.65in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[48]."}
\\rput[bl]{-90}(2.66in,10.65in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[40]."}
\\rput[bl]{-90}(3.48in,10.65in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[32]."}
\\rput[bl]{-90}(4.30in,10.65in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[24]."}
\\rput[bl]{-90}(5.12in,10.65in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[16]."}
\\rput[bl]{-90}(5.94in,10.65in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[8]."}
\\rput[bl]{-90}(6.76in,10.65in){\\fontsize{7}{7}\selectfont ".$prefixBar.$valArray[0]."}



% BRIGHT STAR TEXT ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

%8th row
\\rput[bl]{-90}(0.67in,10.75in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(1.49in,10.75in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(2.31in,10.75in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(3.13in,10.75in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(3.95in,10.75in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(4.77in,10.75in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(5.59in,10.75in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(6.41in,10.75in){\\fontsize{5}{5}\selectfont Your Brand Name}
\\rput[bl]{-90}(7.23in,10.75in){\\fontsize{5}{5}\selectfont Your Brand Name}

%START FCC +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
%8
\\rput[bl]{-90}(0.60in,10.75in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(1.42in,10.75in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(2.24in,10.75in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(3.06in,10.75in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(3.88in,10.75in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(4.70in,10.75in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(5.52in,10.75in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(6.34in,10.75in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}
\\rput[bl]{-90}(7.16in,10.75in){\\fontsize{5}{5}\selectfont FCC ID:TEMPPIDD-C}


%START IC ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
%8
\\rput[bl]{-90}(0.53in,10.75in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(1.35in,10.75in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(2.17in,10.75in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(2.99in,10.75in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(3.81in,10.75in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(4.63in,10.75in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(5.45in,10.75in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(6.27in,10.75in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}
\\rput[bl]{-90}(7.09in,10.75in){\\fontsize{5}{5}\selectfont IC:5945A-MPOD2C}



%MODEL ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
%8
\\rput[bl]{-90}(0.55in,10.00in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(1.37in,10.00in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(2.19in,10.00in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(3.01in,10.00in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(3.83in,10.00in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(4.65in,10.00in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(5.47in,10.00in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(6.29in,10.00in){\\fontsize{5}{5}\selectfont Model No}
\\rput[bl]{-90}(7.11in,10.00in){\\fontsize{5}{5}\selectfont Model No}


%MP MPOD ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
%8
\\rput[bl]{-90}(0.48in,10.00in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(1.30in,10.00in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(2.12in,10.00in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(2.94in,10.00in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(3.76in,10.00in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(4.58in,10.00in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(5.40in,10.00in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(6.22in,10.00in){\\fontsize{5}{5}\selectfont MPOD2-C}
\\rput[bl]{-90}(7.04in,10.00in){\\fontsize{5}{5}\selectfont MPOD2-C}

%MADE IN ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
%8
\\rput[bl]{-90}(0.30in,10.00in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(1.12in,10.00in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(1.94in,10.00in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(2.76in,10.00in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(3.58in,10.00in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(4.40in,10.00in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(5.22in,10.00in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(6.04in,10.00in){\\fontsize{6}{6}\selectfont MADE IN}
\\rput[bl]{-90}(6.86in,10.00in){\\fontsize{6}{6}\selectfont MADE IN}

%USA ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
%8
\\rput[bl]{-90}(0.20in,10.00in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(1.02in,10.00in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(1.84in,10.00in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(2.66in,10.00in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(3.48in,10.00in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(4.30in,10.00in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(5.12in,10.00in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(5.94in,10.00in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}
\\rput[bl]{-90}(6.76in,10.00in){\\fontsize{6}{6}\selectfont\hspace{2mm} USA}

%Cecececececececececececececececeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee


\\rput[bl]{-90}(0.62in,0.73in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(1.44in,0.73in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(2.26in,0.73in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(3.08in,0.73in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(3.90in,0.73in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(4.72in,0.73in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(5.54in,0.73in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(6.36in,0.73in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(7.18in,0.73in){\includegraphics[scale=0.150]{CE}}

\\rput[bl]{-90}(0.62in,2.03in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(1.44in,2.03in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(2.26in,2.03in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(3.08in,2.03in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(3.90in,2.03in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(4.72in,2.03in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(5.54in,2.03in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(6.36in,2.03in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(7.18in,2.03in){\includegraphics[scale=0.150]{CE}}

\\rput[bl]{-90}(0.62in,3.38in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(1.44in,3.38in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(2.26in,3.38in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(3.08in,3.38in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(3.90in,3.38in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(4.72in,3.38in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(5.54in,3.38in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(6.36in,3.38in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(7.18in,3.38in){\includegraphics[scale=0.150]{CE}}

\\rput[bl]{-90}(0.62in,4.68in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(1.44in,4.68in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(2.26in,4.68in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(3.08in,4.68in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(3.90in,4.68in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(4.72in,4.68in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(5.54in,4.68in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(6.36in,4.68in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(7.18in,4.68in){\includegraphics[scale=0.150]{CE}}

\\rput[bl]{-90}(0.62in,6.03in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(1.44in,6.03in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(2.26in,6.03in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(3.08in,6.03in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(3.90in,6.03in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(4.72in,6.03in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(5.54in,6.03in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(6.36in,6.03in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(7.18in,6.03in){\includegraphics[scale=0.150]{CE}}

\\rput[bl]{-90}(0.62in,7.35in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(1.44in,7.35in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(2.26in,7.35in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(3.08in,7.35in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(3.90in,7.35in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(4.72in,7.35in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(5.54in,7.35in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(6.36in,7.35in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(7.18in,7.35in){\includegraphics[scale=0.150]{CE}}


\\rput[bl]{-90}(0.62in,8.65in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(1.44in,8.65in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(2.26in,8.65in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(3.08in,8.65in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(3.90in,8.65in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(4.72in,8.65in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(5.54in,8.65in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(6.36in,8.65in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(7.18in,8.65in){\includegraphics[scale=0.150]{CE}}

\\rput[bl]{-90}(0.62in,10.00in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(1.44in,10.00in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(2.26in,10.00in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(3.08in,10.00in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(3.90in,10.00in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(4.72in,10.00in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(5.54in,10.00in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(6.36in,10.00in){\includegraphics[scale=0.150]{CE}}
\\rput[bl]{-90}(7.18in,10.00in){\includegraphics[scale=0.150]{CE}}


\\end{pspicture}
\\end{landscape}
\\end{document}
";
